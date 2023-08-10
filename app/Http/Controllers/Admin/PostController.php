<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Validation\Rules\File;

class PostController extends Controller
{
      public function __construct()
    {
        $this->middleware('admin')->except('create','store');
 
       
    }






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
       
        'font'=>'required|string',
        'url'=>'required|string',
        'data'=>'required',
        'image'=> ['required', File::types(['jpg', 'png','webp','jpeg'])->max(1024)],
                    
        
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
        if (Auth()->user()->type == 'admin') {
        $post->active = $request->active;
        }
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
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $users = User::all();
        return view('admin.posts.edit',compact('post','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
             $request->validate([
        'titol' => 'required|string|max:255',
        'active'=>'numeric',
        'font'=>'required|string',
        'url'=>'required|string',
        'data'=>'required',
        'image'=> File::types(['jpg', 'png','webp','jpeg'])->max(1024),
        'body' => 'required',
       
         ]);
            if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($post->image);

            $filePath = Storage::disk('public')->put('images/posts', request()->file('image'),'public');
             $post->image = $filePath;
            }
                   $post->titol = $request->titol;
        $post->slug = Str::slug($request->titol) ;
        if (Auth()->user()->type == 'admin') {
        $post->active = $request->active;
        }
        $post->font = $request->font;
        $post->url = $request->url;
        $post->data = $request->data;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $post->update();

        session()->flash('notif.success', 'Post actualitzat amb éxit!');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $delete = $post->delete();

        if($delete) {
            session()->flash('notif.success', 'Post deleted successfully!');
            return redirect()->route('admin.posts.index');
        }
    }
}
