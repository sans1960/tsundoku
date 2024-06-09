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
use App\Models\Banner;
use App\Models\Carrusel;

use App\Models\RatingBook;
use App\Models\RatingAutor;
use App\Models\RatingBookshop;
use App\Models\RatingEdiorial;
use App\Models\RatingPost;
use App\Models\RatingMedi;
use App\Models\RatingActe;

class FrontController extends Controller
{
    public function index()
    {

        $toprated = RatingBook::selectRaw('book_id,AVG(rate) as avg')->groupBy('book_id')->orderBy('avg', 'DESC')->get();
        $books = Book::orderBy('created_at', 'DESC')->where('active', 1)->get();

        foreach ($toprated as $item) {
            if ($item->avg >= 3.5) {
                $topratedbook[] = Book::find($item->book_id);
            }
        }


        $topcoment = Book::withCount('comentbook')
            ->orderBy('comentbook_count', 'desc')
            ->get();;
        $autors = Autor::latest()->take(8)->get();
        $allbooks = Book::orderBy('created_at', 'DESC')->take(7)->get();
        $novetats = Book::where('novetat', 1)->orderBy('created_at', 'DESC')->get();
        $estrenes = Book::where('primera', 1)->orderBy('created_at', 'DESC')->get();
        $autos = Book::where('auto', 1)->get();
        $medis = Medi::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $actes = Acte::orderBy('created_at', 'desc')->get();
        $un = Banner::where('posicio', 'Un')->where('actiu', 1)->get();
        $dos = Banner::where('posicio', 'Dos')->where('actiu', 1)->get();
        $tres = Banner::where('posicio', 'Tres')->where('actiu', 1)->get();
        $cuatre = Banner::where('posicio', 'Cuatre')->where('actiu', 1)->get();
        $cinc = Banner::where('posicio', 'Cinc')->where('actiu', 1)->get();
        $sis = Banner::where('posicio', 'Sis')->where('actiu', 1)->get();
        $primer = Carrusel::where('posicio', 'Primer')->where('actiu', 1)->get();
        $segon = Carrusel::where('posicio', 'Segon')->where('actiu', 1)->get();
        $tercer = Carrusel::where('posicio', 'Tercer')->where('actiu', 1)->get();
        $cuart = Carrusel::where('posicio', 'Cuart')->where('actiu', 1)->get();
        $cinque = Carrusel::where('posicio', 'Cinque')->where('actiu', 1)->get();
        $sise = Carrusel::where('posicio', 'Sise')->where('actiu', 1)->get();
        $sete = Carrusel::where('posicio', 'Sete')->where('actiu', 1)->get();
        $vuite = Carrusel::where('posicio', 'Vuite')->where('actiu', 1)->get();


        return view('front.index', compact('books', 'allbooks', 'autors', 'topratedbook', 'novetats', 'estrenes', 'autos', 'medis', 'posts', 'topcoment', 'actes', 'un', 'dos', 'tres', 'cuatre', 'cinc', 'sis', 'primer', 'segon', 'tercer', 'cuart', 'cinque', 'sise', 'sete', 'vuite'));
    }
    public function autors()
    {
        $autors = Autor::orderBy('created_at', 'DESC')->paginate(16);
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
        $books = Book::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.llibres', compact('books'));
    }

    public function bookshops()
    {
        $bookshops = Bookshop::all();
        return view('front.llibreries', compact('bookshops'));
    }
    public function bookshop(Bookshop $bookshop)
    {
        $rating = RatingBookshop::where('bookshop_id', $bookshop->id)->avg('rate');
        $com = $bookshop->comentbookshop->count();
        return view('front.llibreria', compact('bookshop', 'rating', 'com'));
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
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('front.posts', compact('posts'));
    }
    public function onepost(Post $post)
    {

        $posts = Post::where('id', '!=', $post->id)->orderBy('created_at', 'DESC')->get();
        $rating = RatingPost::where('post_id', $post->id)->avg('rate');


        return view('front.post', compact('post', 'posts', 'rating'));
    }
    public function allMedis()
    {
        $medis = Medi::all();
        return view('front.medis', compact('medis'));
    }
    public function onemedi(Medi $medi)
    {
        $medis = Medi::where('id', '!=', $medi->id)->orderBy('created_at', 'DESC')->get();
        $rating = RatingMedi::where('medi_id', $medi->id)->avg('rate');
        return view('front.medi', compact('medi', 'rating', 'medis'));
    }
    // public function allActes(){
    //      $actes = Acte::all();
    //     return view('front.actes',compact('actes'));
    // }
    public function oneacte(Acte $acte)
    {
        $actes = Acte::where('id', '!=', $acte->id)->orderBy('created_at', 'DESC')->get();
        $rating = RatingActe::where('acte_id', $acte->id)->avg('rate');
        return view('front.acte', compact('acte', 'rating', 'actes'));
    }
    public function allActes()
    {
        $actes = Acte::all();
        return view('front.actes', compact('actes'));
    }
    public function quiSom()
    {
        return view('front.quisom');
    }
}
