<?php

namespace App\Http\Controllers;

use App\Models\ComentActe;
use Illuminate\Http\Request;

class ComentActeController extends Controller
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
        $comentactes = ComentActe::paginate(10);
        return view('admin.comentaris.acte.index', compact('comentactes'));
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

        ComentActe::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentActe $comentActe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentActe $comentActe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentActe $comentActe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentacte = ComentActe::find($id);
        $comentacte->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.acte.index');
    }
}
