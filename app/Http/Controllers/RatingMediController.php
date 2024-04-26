<?php

namespace App\Http\Controllers;

use App\Models\RatingMedi;
use Illuminate\Http\Request;

class RatingMediController extends Controller
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
        $ratingmedis = RatingMedi::paginate(10);
        return view('admin.valoracions.medi.index', compact('ratingmedis'));
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
        $ratingmedi = new RatingMedi();
        $ratingmedi->user_id = $request->user_id;
        $ratingmedi->medi_id = $request->medi_id;
        $ratingmedi->rate = $request->rate;
        $ratingmedi->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingMedi $ratingMedi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingMedi $ratingMedi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingMedi $ratingMedi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingMedi $ratingmedi)
    {
        $ratingmedi->delete();
        session()->flash('notif.success', 'Valoracio eliminada amb éxit!');
        return redirect()->route('rating.medi.index');
    }
}
