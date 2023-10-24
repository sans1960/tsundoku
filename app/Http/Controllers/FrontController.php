<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genere;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Bookshop;
use App\Models\Post;
use App\Models\Medi;
use App\Models\Acte;

use App\Models\RatingBook;
use App\Models\RatingAutor;
use App\Models\RatingEdiorial;







class FrontController extends Controller
{
    public function index()
    {
        $toprated = RatingBook::selectRaw('book_id,AVG(rate) as avg')->groupBy('book_id')->orderBy('avg', 'DESC')->get();
        $books = Book::all();

        foreach ($toprated as $item) {
            if ($item->avg >= 3.5) {
                $topratedbook[] = Book::find($item->book_id);
            }
        }
        $topcoment = Book::withCount('comentbook')
            ->orderBy('comentbook_count', 'desc')
            ->get();;
        $autors = Autor::latest()->take(8)->get();
        $novetats = Book::where('novetat', 1)->get();
        $estrenes = Book::where('primera', 1)->get();
        $autos = Book::where('auto', 1)->get();
        $medi = Medi::orderBy('created_at', 'desc')->first();
        $post = Post::orderBy('created_at', 'desc')->first();
        $actes = Acte::orderBy('created_at', 'asc')->take(4)->get();
        return view('front.index', compact('books', 'autors', 'topratedbook', 'novetats', 'estrenes', 'autos', 'medi', 'post', 'topcoment', 'actes'));
    }
    public function autors()
    {
        $autors = Autor::all();
        return view('front.autors', compact('autors'));
    }
    public function autor(Autor $autor)
    {
        $rating = RatingAutor::where('autor_id', $autor->id)->avg('rate');
        $com = $autor->comentautor->count();

        return view('front.autor', compact('autor', 'rating', 'com'));
    }
    public function book(Book $book)
    {
        $com = $book->comentbook->count();
        $rating = RatingBook::where('book_id', $book->id)->avg('rate');

        return view('front.llibre', compact('book', 'rating', 'com'));
    }
    public function books()
    {
        $books = Book::all();
        return view('front.llibres', compact('books'));
    }

    public function bookshops()
    {
        $bookshops = Bookshop::all();
        return view('front.llibreries', compact('bookshops'));
    }
    public function bookshop(Bookshop $bookshop)
    {

        return view('front.llibreria', compact('bookshop'));
    }

    public function editorials()
    {
        $editorials = Editorial::all();
        return view('front.editorials', compact('editorials'));
    }
    public function editorial(Editorial $editorial)
    {
        $com = $editorial->comenteditorial->count();
        $rating = RatingEdiorial::where('editorial_id', $editorial->id)->avg('rate');
        return view('front.editorial', compact('editorial', 'rating', 'com'));
    }
    public function generes()
    {
        $generes = Genere::all();
        return view('front.generes', compact('generes'));
    }
    public function genere(Genere $genere)
    {
        $books = Book::where('genere_id', $genere->id)->get();
        return view('front.genere', compact('books', 'genere'));
    }
    public function allPosts()
    {
        $posts = Post::all();
        return view('front.posts', compact('posts'));
    }
    public function onepost(Post $post)
    {

        return view('front.post', compact('post'));
    }
    public function allMedis()
    {
        $medis = Medi::all();
        return view('front.medis', compact('medis'));
    }
    public function onemedi(Medi $medi)
    {

        return view('front.medi', compact('medi'));
    }
    // public function allActes(){
    //      $actes = Acte::all();
    //     return view('front.actes',compact('actes'));
    // }
    public function oneacte(Acte $acte)
    {

        return view('front.acte', compact('acte'));
    }
}
