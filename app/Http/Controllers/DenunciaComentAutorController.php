<?php

namespace App\Http\Controllers;

use App\Models\DenunciaComentAutor;
use Illuminate\Http\Request;

class DenunciaComentAutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('admin')->except('store');
    }
    public function index()
    {
        $denuncies = DenunciaComentAutor::all();
        return view('admin.denuncia.comentariautor.index', compact('denuncies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DenunciaComentAutor::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $denuncia = DenunciaComentAutor::find($id);
        return view('admin.denuncia.comentariautor.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DenunciaComentAutor $denunciaComentAutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DenunciaComentAutor $denunciaComentAutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $denuncia = DenunciaComentAutor::find($id);
        $denuncia->delete();
        session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
        return redirect()->route('denunciacoment.autor.index');
    }
}
