<?php

namespace App\Http\Controllers;

use App\Models\DenunciaComentPost;
use Illuminate\Http\Request;

class DenunciaComentPostController extends Controller
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
        $denuncies = DenunciaComentPost::all();
        return view('admin.denuncia.comentaripost.index', compact('denuncies'));
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
        DenunciaComentPost::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $denuncia = DenunciaComentPost::find($id);
        return view('admin.denuncia.comentaripost.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DenunciaComentPost $denunciaComentPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DenunciaComentPost $denunciaComentPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $denuncia = DenunciaComentPost::find($id);
        $denuncia->delete();
        session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
        return redirect()->route('denunciacoment.post.index');
    }
}
