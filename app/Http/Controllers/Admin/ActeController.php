<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acte;
use App\Models\User;
use Illuminate\Support\Str;

class ActeController extends Controller
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
        $actes = Acte::all();
        return view('admin.actes.index',compact('actes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.actes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'titol' => 'required|string|max:255',
      
        'hora' => 'required|string',
        'url'=>'required|string',
        'data'=>'required',
        'image'=> 'required|string',
        'body' => 'required',
       
         ]);
        $acte = new Acte;
        $acte->titol = $request->titol;
        $acte->slug = Str::slug($request->titol) ;
        $acte->image = $request->image;
         if (Auth()->user()->type == 'admin') {
        $acte->active = $request->active;
         }
        $acte->hora = $request->hora;
        $acte->url = $request->url;
        $acte->data = $request->data;
        $acte->body = $request->body;
        $acte->user_id = $request->user_id;
        $acte->save();
              if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Acte creat amb éxit!');
                return redirect()->route('admin.actes.index');
             }else {
                session()->flash('notif.success', 'Acte creat amb éxit!');
                return redirect()->route('home');
             }
    }

    /**
     * Display the specified resource.
     */
    public function show(Acte $acte)
    {
        return view('admin.actes.show',compact('acte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acte $acte)
    {
         $users = User::all();
        return view('admin.actes.edit',compact('acte','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acte $acte)
    {
           $request->validate([
        'titol' => 'required|string|max:255',
       
        'hora' => 'required|string',
        'url'=>'required|string',
        'data'=>'required',
        'image'=> 'required|string',
        'body' => 'required',
       
         ]);
       
        $acte->titol = $request->titol;
        $acte->slug = Str::slug($request->titol) ;
        $acte->image = $request->image;
        $acte->active = $request->active;
        $acte->hora = $request->hora;
        $acte->url = $request->url;
        $acte->data = $request->data;
        $acte->body = $request->body;
        $acte->user_id = $request->user_id;
        $acte->update();
            
                session()->flash('notif.success', 'Acte actualitzat amb éxit!');
                return redirect()->route('admin.actes.index');
             
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acte $acte)
    {
            $acte->delete();
           session()->flash('notif.success', 'Acte eliminat amb éxit!');
            return redirect()->route('admin.actes.index');
    }
}
