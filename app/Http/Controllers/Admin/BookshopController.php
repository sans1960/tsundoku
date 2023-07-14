<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookshop;
use Illuminate\Support\Str;

class BookshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $bookshops = Bookshop::all();
        return view('admin.bookshops.index',compact('bookshops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bookshops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nom' => 'required|string|max:255',
        
        'qui_som'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'latitud'=>'required|string',
        'longitud'=>'required|string',
        'zoom'=> 'required|integer',
        'ciutat' => 'string'
        
             ]);
        $bookshop = new Bookshop;
        $bookshop->nom = $request->nom;
        $bookshop->slug = Str::slug($request->nom);
        $bookshop->qui_som = $request->qui_som;
        $bookshop->logo = $request->logo;
        $bookshop->active = $request->active;
        $bookshop->url = $request->url;
        $bookshop->latitud = $request->latitud;
        $bookshop->longitud = $request->longitud;
        $bookshop->zoom = $request->zoom;
        $bookshop->ciutat = $request->ciutat;
        $bookshop->user_id = $request->user_id;
        $bookshop->save();
            
           
         session()->flash('notif.success', 'Llibreria creada amb éxit!');
            return redirect()->route('admin.bookshops.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookshop $bookshop)
    {
        return view('admin.bookshops.show',compact('bookshop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookshop $bookshop)
    {
        return view('admin.bookshops.edit',compact('bookshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookshop $bookshop)
    {
          $request->validate([
        'nom' => 'required|string|max:255',
        
        'qui_som'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'latitud'=>'required|string',
        'longitud'=>'required|string',
        'zoom'=> 'required|integer',
        'ciutat' => 'string'
        
             ]);
        $bookshop->nom = $request->nom;
        $bookshop->slug = Str::slug($request->nom);
        $bookshop->qui_som = $request->qui_som;
        $bookshop->logo = $request->logo;
        $bookshop->active = $request->active;
        $bookshop->url = $request->url;
        $bookshop->latitud = $request->latitud;
        $bookshop->longitud = $request->longitud;
        $bookshop->zoom = $request->zoom;
        $bookshop->ciutat = $request->ciutat;
        $bookshop->user_id = $request->user_id;
        $bookshop->update();
         session()->flash('notif.success', 'Llibreria actualitzada amb éxit!');
            return redirect()->route('admin.bookshops.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookshop $bookshop)
    {
        $bookshop->delete();
           session()->flash('notif.success', 'Llibreria eliminada amb éxit!');
            return redirect()->route('admin.bookshops.index');
    }
}
