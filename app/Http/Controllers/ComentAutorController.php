<?php

namespace App\Http\Controllers;

use App\Models\ComentAutor;
use Illuminate\Http\Request;

class ComentAutorController extends Controller
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
        $comentautors = ComentAutor::paginate(10);
        return view('admin.comentaris.autor.index', compact('comentautors'));
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
        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        ComentAutor::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentAutor $comentAutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentAutor $comentAutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentAutor $comentAutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentautor = ComentAutor::find($id);
        $comentautor->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.autor.index');
    }
}
