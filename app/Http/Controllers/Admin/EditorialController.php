<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::all();
         return view('admin.editorials.index',compact('editorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.editorials.create');
    }
    public function generateUniqueCode()
    {
        do {
            $editorial_id = random_int(100000, 999999);
        } while (Editorial::where("editorial_id", "=", $editorial_id)->first());
  
        return $editorial_id;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'editorial_nom' => 'required|string|max:255',
        'slug' => 'required',
        'descripcio'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'url_vendes'=>'required|string',
         'adreça' => 'string'
        
             ]);
             $editorial = new Editorial();
             $editorial->editorial_nom = $request->editorial_nom;
             $editorial->slug = $request->slug;
             $editorial->descripcio = $request->descripcio;
             $editorial->logo = $request->logo;
             $editorial->active = $request->active;
             $editorial->url = $request->url;
             $editorial->url_vendes = $request->url_vendes;
             $editorial->adreça = $request->adreça;
    
             $editorial->save();
          
          
         session()->flash('notif.success', 'Editorial creada amb éxit!');
            return redirect()->route('admin.editorials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
         return view('admin.editorials.show',compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editorial $editorial)
    {
         return view('admin.editorials.edit',compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editorial $editorial)
    {
          $request->validate([
        'editorial_nom' => 'required|string|max:255',
        'slug' => 'required',
        'descripcio'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'url_vendes'=>'required|string',
       
        
             ]);
            $editorial->update($request->all());
         session()->flash('notif.success', 'Editorial actualitzada amb éxit!');
            return redirect()->route('admin.editorials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editorial $editorial)
    {
          $editorial->delete();
           session()->flash('notif.success', 'Editorial eliminada amb éxit!');
            return redirect()->route('admin.editorials.index');
    }
    
}
