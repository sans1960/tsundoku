<?php

namespace App\Http\Controllers;

use App\Models\RatingEdiorial;
use Illuminate\Http\Request;

class RatingEdiorialController extends Controller
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
        $ratingeditorials = RatingEdiorial::paginate(10);
        return view('admin.valoracions.editorial.index', compact('ratingeditorials'));
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
        $ratingeditorial = new RatingEdiorial();
        $ratingeditorial->user_id = $request->user_id;
        $ratingeditorial->editorial_id = $request->editorial_id;
        $ratingeditorial->rate = $request->rate;
        $ratingeditorial->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingEdiorial $ratingEdiorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingEdiorial $ratingEdiorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingEdiorial $ratingEdiorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingEdiorial $ratingeditorial)
    {
        $ratingeditorial->delete();
        session()->flash('notif.success', 'Valoracio eliminada amb éxit!');
        return redirect()->route('rating.editorial.index');
    }
}
