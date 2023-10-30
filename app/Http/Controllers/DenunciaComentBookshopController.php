<?php

namespace App\Http\Controllers;

use App\Models\DenunciaComentBookshop;
use Illuminate\Http\Request;

class DenunciaComentBookshopController extends Controller
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
        $denuncies = DenunciaComentBookshop::all();
        return view('admin.denuncia.comentaribookshop.index', compact('denuncies'));
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
        DenunciaComentBookshop::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $denuncia = DenunciaComentBookshop::find($id);
        return view('admin.denuncia.comentaribookshop.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DenunciaComentBookshop $denunciaComentBookshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DenunciaComentBookshop $denunciaComentBookshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $denuncia = DenunciaComentBookshop::find($id);
        $denuncia->delete();
        session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
        return redirect()->route('denunciacoment.bookshop.index');
    }
}
