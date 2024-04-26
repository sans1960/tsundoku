<?php

namespace App\Http\Controllers;

use App\Models\RatingActe;
use Illuminate\Http\Request;

class RatingActeController extends Controller
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
        $ratingactes = RatingActe::paginate(10);
        return view('admin.valoracions.acte.index', compact('ratingactes'));
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
        $ratingacte = new RatingActe();
        $ratingacte->user_id = $request->user_id;
        $ratingacte->acte_id = $request->acte_id;
        $ratingacte->rate = $request->rate;
        $ratingacte->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingActe $ratingActe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingActe $ratingActe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingActe $ratingActe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingActe $ratingacte)
    {
        $ratingacte->delete();
        session()->flash('notif.success', 'Valoracio eliminada amb éxit!');
        return redirect()->route('rating.acte.index');
    }
}
