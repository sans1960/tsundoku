<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookshop;

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
        'slug' => 'required',
        'qui_som'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'latitud'=>'required|string',
        'longitud'=>'required|string',
        'zoom'=> 'required|integer',
        'ciutat' => 'string'
        
             ]);
            Bookshop::create($request->all());
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
        'slug' => 'required',
        'qui_som'=>'required',
        'logo'=>'required',
        'active'=>'numeric',
        'url'=>'required|string',
        'latitud'=>'required|string',
        'longitud'=>'required|string',
        'zoom'=> 'required|integer',
        'ciutat' => 'string'
        
             ]);
            $bookshop->update($request->all());
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
