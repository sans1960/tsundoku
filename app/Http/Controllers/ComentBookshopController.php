<?php

namespace App\Http\Controllers;

use App\Models\ComentBookshop;
use Illuminate\Http\Request;

class ComentBookshopController extends Controller
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
        $comentbookshops = ComentBookshop::paginate(10);
        return view('admin.comentaris.bookshop.index', compact('comentbookshops'));
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

        ComentBookshop::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentBookshop $comentBookshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentBookshop $comentBookshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentBookshop $comentBookshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentbookshop = ComentBookshop::find($id);
        $comentbookshop->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.bookshop.index');
    }
}
