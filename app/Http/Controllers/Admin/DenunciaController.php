<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denuncia;

class DenunciaController extends Controller
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
        $denuncies = Denuncia::all();
        return view('admin.denuncia.index',compact('denuncies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Denuncia::create($request->all());
         session()->flash('notif.success', 'Denuncia creada amb éxit!');
                return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $denuncia = Denuncia::find($id);
        return view('admin.denuncia.show',compact('denuncia'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $denuncia = Denuncia::find($id);
             $denuncia->delete();
           session()->flash('notif.success', 'Denuncia eliminada amb éxit!');
            return redirect()->route('admin.denuncia.index');
    }
}
