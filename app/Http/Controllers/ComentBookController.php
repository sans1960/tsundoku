<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComentBook;

class ComentBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('store');
 
       
    }
    public function index(){
        $comentbooks = ComentBook::paginate(10);
        return view('admin.comentaris.book.index',compact('comentbooks'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
    
        ComentBook::create($input);
   
        return back();
    }
      public function destroy( $id){
        $comentbook = ComentBook::find($id);
        $comentbook->delete();
        session()->flash('notif.success', 'Comentari eliminat amb éxit!');
        return redirect()->route('coment.book.index');
    }
}
