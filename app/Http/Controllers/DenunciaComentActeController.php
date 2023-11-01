<?php

namespace App\Http\Controllers;

use App\Models\DenunciaComentActe;
use Illuminate\Http\Request;

class DenunciaComentActeController extends Controller
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
        $denuncies = DenunciaComentActe::all();
        return view('admin.denuncia.comentariacte.index', compact('denuncies'));
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
        DenunciaComentActe::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $denuncia = DenunciaComentActe::find($id);
        return view('admin.denuncia.comentariacte.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DenunciaComentActe $denunciaComentActe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DenunciaComentActe $denunciaComentActe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $denuncia = DenunciaComentActe::find($id);
        $denuncia->delete();
        session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
        return redirect()->route('denunciacoment.acte.index');
    }
}
