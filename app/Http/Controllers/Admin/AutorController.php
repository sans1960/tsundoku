<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autors = Autor::all();
        return view('admin.autors.index',compact('autors'));
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.autors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
        'autor_nom' => 'required|string|max:255',
        'slug' => 'required',
        'biopic'=>'required',
        'url_foto'=>'required',
        'active'=>'numeric'
        
             ]);
         $autor = new Autor();
         $autor->autor_nom = $request->autor_nom;
         $autor->slug = $request->slug;
         $autor->url_foto = $request->url_foto;
         $autor->biopic = $request->biopic;
         $autor->active = $request->active;
        
         $autor->save();
          
        
         session()->flash('notif.success', 'Autor creat amb éxit!');
            return redirect()->route('admin.autors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return view('admin.autors.show',compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        return view('admin.autors.edit',compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
             $request->validate([
        'autor_nom' => 'required|string|max:255',
        'slug' => 'required',
        'biopic'=>'required',
        'url_foto'=>'required',
        'active'=>'numeric'
        
             ]);
         
       
        $autor->update($request->all());
         session()->flash('notif.success', 'Autor actualitzat amb éxit!');
            return redirect()->route('admin.autors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
           $autor->delete();
           session()->flash('notif.success', 'Autor eliminat amb éxit!');
            return redirect()->route('admin.autors.index');
    }
    
}
