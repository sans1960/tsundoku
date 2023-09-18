<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DenunciaComentariBook;

class DenunciaComentBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('store');
 
       
    }
    public function index(){
        $denuncies = DenunciaComentariBook::all();
        return view('admin.denuncia.comentaribook.index',compact('denuncies'));
    }
    public function store(Request $request){
        DenunciaComentariBook::create($request->all());
        session()->flash('notif.success', 'Denuncia creada amb éxit!');
        return back();
    }
}
