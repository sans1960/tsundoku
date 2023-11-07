<?php

namespace App\Http\Controllers;

use App\Models\Acte;
use App\Models\Autor;
use App\Models\Book;
use App\Models\Bookshop;
use App\Models\Editorial;
use App\Models\Medi;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $searchterm = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(Autor::class, 'autor_nom')
            ->registerModel(Book::class, 'titol')
            ->registerModel(Bookshop::class, 'nom')
            ->registerModel(Editorial::class, 'editorial_nom')
            ->registerModel(Post::class, 'titol')
            ->registerModel(Medi::class, 'titol')
            ->registerModel(Acte::class, 'titol')
            ->perform($searchterm);

        return view('front.search', compact('searchResults', 'searchterm'));
    }
}
