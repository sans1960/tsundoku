<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;
use Illuminate\Support\Str;

class EditorialController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'editorial_nom' => 'required|string|max:255',
        
        'descripcio'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'url_vendes'=>'required|string',
         'adreça' => 'string'
        
             ]);
             $editorial = new Editorial();
             $editorial->editorial_nom = $request->editorial_nom;
             $editorial->slug = Str::slug($request->editorial_nom);
             $editorial->descripcio = $request->descripcio;
             $editorial->logo = $request->logo;
             $editorial->active = $request->active;
             $editorial->url = $request->url;
             $editorial->url_vendes = $request->url_vendes;
             $editorial->adreça = $request->adreça;
             $editorial->user_id = $request->user_id;
    
             $editorial->save();
          
          
        if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Editorial creada amb éxit!');
                return redirect()->route('admin.editorials.index');
             }else {
                session()->flash('notif.success', 'Editorial creada amb éxit!');
                return redirect()->route('home');
             }
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
        
        'descripcio'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'url_vendes'=>'required|string',
       
        
             ]);
             $editorial->editorial_nom = $request->editorial_nom;
             $editorial->slug = Str::slug($request->editorial_nom);
             $editorial->descripcio = $request->descripcio;
             $editorial->logo = $request->logo;
             $editorial->active = $request->active;
             $editorial->url = $request->url;
             $editorial->url_vendes = $request->url_vendes;
             $editorial->adreça = $request->adreça;
             $editorial->user_id = $request->user_id;
    
             $editorial->update();
           
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
