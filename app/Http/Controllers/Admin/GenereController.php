<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genere;
use Illuminate\Support\Str;



class GenereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generes = Genere::all();
        return view('admin.generes.index',compact('generes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.generes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
        'nom' => 'required|string|max:255',
        
        
    ]);
         
          $genere = new Genere;
          $genere->nom = $request->nom;
          $genere->slug = Str::slug($request->nom);
       
          $genere->active = $request->active;
          $genere->save();

    
            // add flash for the success notification
            session()->flash('notif.success', 'Génere creat amb éxit!');
            return redirect()->route('admin.generes.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Genere $genere)
    {
        return view('admin.generes.show',compact('genere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genere $genere)
    {
        return view('admin.generes.edit',compact('genere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genere $genere)
    {
              $request->validate([
                  'nom' => 'required|string|max:255',
               
               ]);
    
        
          $genere->nom = $request->nom;
          $genere->slug = Str::slug($request->nom);
          
          $genere->active = $request->active;
          $genere->update();
               
               session()->flash('notif.success', 'Génere actualitzat amb éxit!');
            return redirect()->route('admin.generes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genere $genere)
    {
        // Storage::disk('public')->delete($genere->icon);
        $genere->delete();
          session()->flash('notif.success', 'Génere eliminat amb éxit!');
            return redirect()->route('admin.generes.index');
    }
}
