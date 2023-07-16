<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medi;
use Illuminate\Support\Str;

class Medicontroller extends Controller
{
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
        'active'=>'numeric',
        
        'url'=>'required|string',
        'data'=>'required',
        'image'=> 'required|string',
        'body' => 'required',
       
         ]);
        $medi = new Medi;
        $medi->titol = $request->titol;
        $medi->slug = Str::slug($request->titol) ;
        $medi->image = $request->image;
        $medi->active = $request->active;
        
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
        return view('admin.medis.edit',compact('medi'));
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
        'image'=> 'required|string',
        'body' => 'required',
       
         ]);
       
        $medi->titol = $request->titol;
        $medi->slug = Str::slug($request->titol) ;
        $medi->image = $request->image;
        $medi->active = $request->active;
        
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
             $medi->delete();
           session()->flash('notif.success', 'Medi eliminat amb éxit!');
            return redirect()->route('admin.medis.index');
    }
}
