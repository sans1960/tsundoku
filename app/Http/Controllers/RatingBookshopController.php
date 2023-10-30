<?php

namespace App\Http\Controllers;

use App\Models\RatingBookshop;
use Illuminate\Http\Request;

class RatingBookshopController extends Controller
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
        $ratingbookshops = RatingBookshop::paginate(10);
        return view('admin.valoracions.bookshop.index', compact('ratingbookshops'));
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
        $ratingbookshop = new RatingBookshop();
        $ratingbookshop->user_id = $request->user_id;
        $ratingbookshop->bookshop_id = $request->bookshop_id;
        $ratingbookshop->rate = $request->rate;
        $ratingbookshop->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingBookshop $ratingBookshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingBookshop $ratingBookshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingBookshop $ratingBookshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingBookshop $ratingBookshop)
    {
        //
    }
}
