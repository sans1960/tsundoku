<?php

namespace App\Http\Controllers;

use App\Models\RatingAutor;
use Illuminate\Http\Request;


class RatingAutorController extends Controller
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
        $ratingautors = RatingAutor::paginate(10);
        return view('admin.valoracions.autor.index', compact('ratingautors'));
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
        request()->validate(['rate' => 'required']);
        $ratingautor = new RatingAutor();
        $ratingautor->user_id = $request->user_id;
        $ratingautor->autor_id = $request->autor_id;
        $ratingautor->rate = $request->rate;
        $ratingautor->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(RatingAutor $ratingAutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingAutor $ratingAutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingAutor $ratingAutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingAutor $ratingautor)
    {
        $ratingautor->delete();
        session()->flash('notif.success', 'Valoracio eliminada amb éxit!');
        return redirect()->route('rating.autor.index');
    }
}
