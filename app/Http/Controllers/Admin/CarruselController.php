<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Carrusel;
use Illuminate\Http\Request;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrusels = Carrusel::all();
        return view('admin.carrusels.index', compact('carrusels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        return view('admin.carrusels.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titol' => 'required',
            'tema' => 'required',

        ]);
        $carrusel = new Carrusel();
        $carrusel->titol = $request->titol;
        $carrusel->subtitol = $request->subtitol;
        $carrusel->tema = $request->tema;
        $carrusel->actiu = $request->actiu;

        $carrusel->save();
        if ($request->books) {
            $carrusel->books()->attach($request->books);
        }
        session()->flash('notif.success', 'Carrusel creat');
        return redirect()->route('admin.carrusels.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrusel $carrusel)
    {
        return view('admin.carrusels.show', compact('carrusel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrusel $carrusel)
    {
        $books = Book::all();
        $carruselbooks = $carrusel->books;
        $diffbooks = $books->diff($carruselbooks);
        return view('admin.carrusels.edit', compact('carrusel', 'books', 'diffbooks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrusel $carrusel)
    {
        $request->validate([
            'titol' => 'required',
            'tema' => 'required',

        ]);

        $carrusel->titol = $request->titol;
        $carrusel->subtitol = $request->subtitol;
        $carrusel->tema = $request->tema;
        $carrusel->actiu = $request->actiu;
        $carrusel->update();
        if ($request->books) {
            $carrusel->books()->sync($request->books);
        }
        session()->flash('notif.success', 'Carrusel actualitzat');
        return redirect()->route('admin.carrusels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrusel $carrusel)
    {
        $carrusel->delete();
        $carrusel->books()->detach();
        session()->flash('notif.success', 'Carrusel eliminat');
        return redirect()->route('admin.carrusels.index');
    }
}
