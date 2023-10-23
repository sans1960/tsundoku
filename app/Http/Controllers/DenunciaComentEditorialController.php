<?php

namespace App\Http\Controllers;

use App\Models\DenunciaComentEditorial;
use Illuminate\Http\Request;

class DenunciaComentEditorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('store');
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denuncies = DenunciaComentEditorial::all();
        return view('admin.denuncia.comentarieditorial.index', compact('denuncies'));
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
        DenunciaComentEditorial::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $denuncia = DenunciaComentEditorial::find($id);
        return view('admin.denuncia.comentarieditorial.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DenunciaComentEditorial $denunciaComentEditorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DenunciaComentEditorial $denunciaComentEditorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $denuncia = DenunciaComentEditorial::find($id);
        $denuncia->delete();
        session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
        return redirect()->route('denunciacoment.editorial.index');
    }
}
