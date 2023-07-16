<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genere;
use App\Models\Book;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\User;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        $generes = Genere::all();
        $autors = Autor::all();
        $editorials= Editorial::all();
        return view('admin.books.create',compact('generes','autors','editorials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'titol' => 'required|string|max:255',
       
        'autor_nom'=>'required',
        'genere_id'=>'required',
        'active'=>'numeric',
        'editorial_nom'=>'required|string',
        'editorial_web'=>'required|string',
        'idioma'=>'required|string',
        'imatge'=> 'required|string',
        'sinopsi' => 'required',
        'user_id' => 'required',
        'isbn' => 'required|string',
        
             ]);
             $book = new Book;
             $book->titol = $request->titol;
             $book->slug = Str::slug($request->titol);
             $book->autor_nom = $request->autor_nom;
             $book->genere_id = $request->genere_id;
             $book->autor_id = $request->autor_id;
             $book->active = $request->active;
             $book->editorial_nom = $request->editorial_nom;
             $book->editorial_web = $request->editorial_web;
             $book->editorial_id = $request->editorial_id;
             $book->user_id = $request->user_id;
             $book->idioma = $request->idioma;
             $book->imatge = $request->imatge;
             $book->sinopsi = $request->sinopsi;
             $book->isbn = $request->isbn;
             $book->save();







             if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Llibre creat amb éxit!');
                return redirect()->route('admin.books.index');
             }else {
                session()->flash('notif.success', 'Llibre creat amb éxit!');
                return redirect()->route('home');
             }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
      
        $generes = Genere::all();
        $autors = Autor::all();
        $editorials= Editorial::all();
        return view('admin.books.edit',compact('generes','book','autors','editorials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titol' => 'required|string|max:255',
           
            'autor_nom'=>'required',
            'genere_id'=>'required',
            'active'=>'numeric',
            'editorial_nom'=>'required|string',
            'editorial_web'=>'required|string',
            'idioma'=>'required|string',
            'imatge'=> 'required|string',
            'sinopsi' => 'required',
            'user_id' => 'required',
            'isbn' => 'required|string',
            
                 ]);
                   
             $book->titol = $request->titol;
             $book->slug = Str::slug($request->titol);
             $book->autor_nom = $request->autor_nom;
             $book->genere_id = $request->genere_id;
             $book->autor_id = $request->autor_id;
             $book->active = $request->active;
             $book->editorial_nom = $request->editorial_nom;
             $book->editorial_web = $request->editorial_web;
             $book->editorial_id = $request->editorial_id;
             $book->user_id = $request->user_id;
             $book->idioma = $request->idioma;
             $book->imatge = $request->imatge;
             $book->sinopsi = $request->sinopsi;
             $book->isbn = $request->isbn;
             $book->update();
           
            session()->flash('notif.success', 'Llibre actualitzat amb éxit!');
            return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
           session()->flash('notif.success', 'Llibre eliminat amb éxit!');
            return redirect()->route('admin.llibres.index');
    }
}