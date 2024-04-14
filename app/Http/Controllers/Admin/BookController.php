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
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('create', 'store');
    }







    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(5);
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $generes = Genere::all();
        $autors = Autor::all();
        $editorials = Editorial::all();
        return view('admin.books.create', compact('generes', 'autors', 'editorials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required|string|max:255|unique:books',

            'autor_nom' => 'string',
            'genere_id' => 'required',
            'active' => 'boolean',
            'editorial_nom' => 'required|string',
            'editorial_web' => 'required|string',
            'idioma' => 'required|string',
            'foto' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),
            'sinopsi' => 'required',
            'user_id' => 'required',
            'isbn' => 'required|string',
            'novetat' => 'required',
            'primera' => 'required',
            'auto' => 'required',


        ]);
        if ($request->hasFile('foto')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/books', request()->file('foto'));
        }
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
        if ($request->imatge) {

            $book->imatge = $request->imatge;
        } else {
            $book->foto = $filePath;
        }

        $book->sinopsi = $request->sinopsi;
        $book->isbn = $request->isbn;
        $book->novetat = $request->novetat;
        $book->primera = $request->primera;
        $book->auto = $request->auto;
        $book->cita = $request->cita;
        $book->comentari = $request->comentari;
        $book->save();







        if (Auth()->user()->type == 'admin') {
            session()->flash('notif.success', 'Llibre creat amb éxit!');
            return redirect()->route('admin.books.index');
        } else {
            session()->flash('notif.success', 'Llibre pendent de validació per tsundoku.cat en breu rebrás un correu de confirmació , grácies');
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $users = User::All();
        $generes = Genere::all();
        $autors = Autor::all();
        $editorials = Editorial::all();
        return view('admin.books.edit', compact('generes', 'book', 'autors', 'editorials', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titol' => 'required|string|max:255',

            'autor_nom' => 'required',
            'genere_id' => 'required',
            'active' => 'numeric',
            'editorial_nom' => 'required|string',
            'editorial_web' => 'required|string',
            'idioma' => 'required|string',
            'foto' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),


            'sinopsi' => 'required',
            'user_id' => 'required',
            'isbn' => 'required|string',
            'novetat' => 'required',
            'primera' => 'required',
            'auto' => 'required',


        ]);
        if ($request->hasFile('foto')) {
            if ($book->foto) {
                Storage::disk('public')->delete($book->foto);

                $filePath = Storage::disk('public')->put('images/books', request()->file('foto'));
                $book->foto = $filePath;
            } else {
                $filePath = Storage::disk('public')->put('images/books', request()->file('foto'));
                $book->foto = $filePath;
            }
        }

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
        if (empty($request->imatge)) {
            $book->imatge = $request->imatge;
        } else {
            $book->imatge = $request->imatge;
        }

        $book->sinopsi = $request->sinopsi;
        $book->isbn = $request->isbn;
        $book->novetat = $request->novetat;
        $book->primera = $request->primera;
        $book->auto = $request->auto;
        $book->cita = $request->cita;
        $book->comentari = $request->comentari;
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
        return redirect()->route('admin.books.index');
    }
    public function findbook()
    {
        return view('admin.books.find');
    }
    public function searchbook(Request $request)
    {
        $search = $request->input('search');
        $books = Book::where('titol', 'LIKE', "%{$search}%")->get();
        return view('admin.books.find', compact('books'));
    }
}
