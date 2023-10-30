<?php

namespace App\Http\Controllers;

use App\Models\RatingPost;
use Illuminate\Http\Request;

class RatingPostController extends Controller
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
        $ratingposts = RatingPost::paginate(10);
        return view('admin.valoracions.post.index', compact('ratingposts'));
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
        $ratingpost = new RatingPost();
        $ratingpost->user_id = $request->user_id;
        $ratingpost->post_id = $request->post_id;
        $ratingpost->rate = $request->rate;
        $ratingpost->save();
        session()->flash('notif.success', 'Gracies per la teva votació!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(RatingPost $ratingPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RatingPost $ratingPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RatingPost $ratingPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RatingPost $ratingPost)
    {
        //
    }
}
