<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medi;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;


class Medicontroller extends Controller
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
        $medis = Medi::all();
        return view('admin.medis.index',compact('medis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.medis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'titol' => 'required|string|max:255',
        'image'=> ['required', File::types(['jpg', 'png','webp','jpeg'])->max(1024)],
        'tipus' => 'required',
        'url'=>'required|string',
        'data'=>'required',
        
        'body' => 'required',
       
         ]);
         if ($request->hasFile('image')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('images/medis', request()->file('image'));
           
       }
        $medi = new Medi;
        $medi->titol = $request->titol;
        $medi->tipus = $request->tipus;
        $medi->slug = Str::slug($request->titol) ;
        $medi->image = $filePath;
        if (Auth()->user()->type == 'admin') {
        $medi->active = $request->active;
        }
        
        $medi->url = $request->url;
        $medi->data = $request->data;
        $medi->body = $request->body;
        $medi->user_id = $request->user_id;
        $medi->save();
              if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Medi creat amb éxit!');
                return redirect()->route('admin.medis.index');
             }else {
                session()->flash('notif.success', 'Medi creat amb éxit!');
                return redirect()->route('home');
             }
    }

    /**
     * Display the specified resource.
     */
    public function show(Medi $medi)
    {
        return view('admin.medis.show',compact('medi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medi $medi)
    {
        $users = User::all();
        return view('admin.medis.edit',compact('medi','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Medi $medi )
    {
              $request->validate([
        'titol' => 'required|string|max:255',
        'active'=>'numeric',
        
        'url'=>'required|string',
        'data'=>'required',
        'image'=> File::types(['jpg', 'png','webp','jpeg'])->max(1024),

        'body' => 'required',
       
         ]);
         if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($medi->image);

            $filePath = Storage::disk('public')->put('images/medis', request()->file('image'),'public');
             $medi->image = $filePath;
            }
       
        $medi->titol = $request->titol;
        $medi->slug = Str::slug($request->titol) ;
        $medi->tipus = $request->tipus;
        if (Auth()->user()->type == 'admin') {
        $medi->active = $request->active;
        }
        $medi->url = $request->url;
        $medi->data = $request->data;
        $medi->body = $request->body;
        $medi->user_id = $request->user_id;
        $medi->update();
           session()->flash('notif.success', 'Medi actualitzat amb éxit!');
                return redirect()->route('admin.medis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medi $medi)
    {
        Storage::disk('public')->delete($medi->image);
             $medi->delete();
           session()->flash('notif.success', 'Medi eliminat amb éxit!');
            return redirect()->route('admin.medis.index');
    }
}
