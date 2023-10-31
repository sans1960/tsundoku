<?php

namespace App\Http\Controllers;

use App\Models\ComentMedi;
use Illuminate\Http\Request;

class ComentMediController extends Controller
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
        $comentmedis = ComentMedi::paginate(10);
        return view('admin.comentaris.medi.index', compact('comentmedis'));
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

        ComentMedi::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentMedi $comentMedi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentMedi $comentMedi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentMedi $comentMedi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentmedi = ComentMedi::find($id);
        $comentmedi->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.medi.index');
    }
}
