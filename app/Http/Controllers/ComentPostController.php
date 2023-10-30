<?php

namespace App\Http\Controllers;

use App\Models\ComentPost;
use Illuminate\Http\Request;

class ComentPostController extends Controller
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
        $comentposts = ComentPost::paginate(10);
        return view('admin.comentaris.post.index', compact('comentposts'));
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

        ComentPost::create($input);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ComentPost $comentPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComentPost $comentPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComentPost $comentPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentpost = ComentPost::find($id);
        $comentpost->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.post.index');
    }
}
