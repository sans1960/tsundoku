<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'titol' => 'required|string|max:255',
        'active'=>'numeric',
        'font'=>'required|string',
        'url'=>'required|string',
        'data'=>'required',
        'image'=> 'required|image|mimes:jpg,png,jpeg',
        'body' => 'required',
       
         ]);
        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts', request()->file('image'));
            
        }
        $post = new Post;
        $post->titol = $request->titol;
        $post->slug = Str::slug($request->titol) ;
        $post->image = $filePath;
        $post->active = $request->active;
        $post->font = $request->font;
        $post->url = $request->url;
        $post->data = $request->data;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->save();

           if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Post creat amb éxit!');
                return redirect()->route('admin.posts.index');
             }else {
                session()->flash('notif.success', 'Post creat amb éxit!');
                return redirect()->route('home');
             }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.posts.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
