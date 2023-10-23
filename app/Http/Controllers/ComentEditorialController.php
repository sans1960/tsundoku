<?php

namespace App\Http\Controllers;

use App\Models\ComentEditorial;
use Illuminate\Http\Request;

class ComentEditorialController extends Controller
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
        $comenteditorials = ComentEditorial::paginate(10);
        return view('admin.comentaris.editorial.index', compact('comenteditorials'));
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

        ComentEditorial::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentEditorial $comentEditorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentEditorial $comentEditorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentEditorial $comentEditorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comenteditorial = ComentEditorial::find($id);
        $comenteditorial->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.editorial.index');
    }
}
