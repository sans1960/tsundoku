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
use willvincent\Rateable\Rating;
use Illuminate\Database\Eloquent\Builder;



class FrontController extends Controller
{
    public function index(){
        $toprated = RatingBook::selectRaw('book_id,AVG(rate) as avg')->groupBy('book_id')->get();
        $books = Book::all();
       
        foreach ($toprated as $item) {
            if($item->avg >= 4.5){
                $topratedbook[] = Book::find($item->book_id);

            }
        }
        $autors = Autor::latest()->take(8)->get();
        return view('front.index',compact('books','autors','topratedbook'));
       
    }
    public function autors(){
        $autors = Autor::all();
        return view('front.autors',compact('autors'));
    }
    public function autor(Autor $autor){
    
        return view('front.autor',compact('autor'));
    }
     public function book(Book $book){
        $com = $book->comentbook->count();
        $rating = RatingBook::where('book_id',$book->id)->avg('rate');
     
        return view('front.llibre',compact('book','rating','com'));
     
    }
    public function books(){
        $books = Book::all();
        return view('front.llibres',compact('books'));
    }

    public function bookshops(){
        $bookshops = Bookshop::all();
        return view('front.llibreries',compact('bookshops'));
    }
    public function bookshop(Bookshop $bookshop){
        
        return view('front.llibreria',compact('bookshop'));
    }

    public function editorials(){
        $editorials = Editorial::all();
        return view('front.editorials',compact('editorials'));
    }
     public function editorial(Editorial $editorial){
        
        return view('front.editorial',compact('editorial'));
    }
    public function generes(){
        $generes = Genere::all();
        return view('front.generes',compact('generes'));
    }
    public function genere(Genere $genere){
        $books = Book::where('genere_id',$genere->id)->get();
        return view('front.genere',compact('books','genere'));
    }
    public function allPosts(){
        $posts = Post::all();
        return view('front.posts',compact('posts'));
    }
    public function onepost(Post $post){
         
        return view('front.post',compact('post'));
    }
     public function allMedis(){
         $medis = Medi::all();
        return view('front.medis',compact('medis'));
    }
    public function onemedi(Medi $medi){
        
        return view('front.medi',compact('medi'));
    }
    // public function allActes(){
    //      $actes = Acte::all();
    //     return view('front.actes',compact('actes'));
    // }
    public function oneacte(Acte $acte){
          
         return view('front.acte',compact('acte'));
     }












   public function ratingautor(Request $request){
     request()->validate(['rating' => 'required']);
     $autor = Autor::find($request->id);
     $rating = new Rating();
     $rating->rating = $request->rating;
     $rating->user_id = auth()->user()->id;
     $autor-> rateOnce($request->rating);
      return redirect()->back();
   
   }
   public function ratingeditorial(Request $request){
    request()->validate(['rating' => 'required']);
    $editorial = Editorial::find($request->id);
    $rating = new Rating();
    $rating->rating = $request->rating;
    $rating->user_id = auth()->user()->id;
    $editorial->rateOnce($request->rating);
     return redirect()->back();
  
  }
  public function ratingbookshop(Request $request){
    request()->validate(['rating' => 'required']);
    $bookshop = Bookshop::find($request->id);
    $rating = new Rating();
    $rating->rating = $request->rating;
    $rating->user_id = auth()->user()->id;
    $bookshop->rateOnce($request->rating);
     return redirect()->back();
  
  }
    public function ratingpost(Request $request){
    request()->validate(['rating' => 'required']);
    $post = Post::find($request->id);
    $rating = new Rating();
    $rating->rating = $request->rating;
    $rating->user_id = auth()->user()->id;
    $post->rateOnce($request->rating);
     return redirect()->back();
  
  }
    public function ratingmedi(Request $request){
    request()->validate(['rating' => 'required']);
    $medi = Medi::find($request->id);
    $rating = new Rating();
    $rating->rating = $request->rating;
    $rating->user_id = auth()->user()->id;
    $medi->rateOnce($request->rating);
     return redirect()->back();
  
  }
    public function ratingacte(Request $request){
    request()->validate(['rating' => 'required']);
    $acte = Acte::find($request->id);
    $rating = new Rating();
    $rating->rating = $request->rating;
    $rating->user_id = auth()->user()->id;
    $acte->rateOnce($request->rating);
     return redirect()->back();
  
  }
}
