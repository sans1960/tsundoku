<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingBook;

class RatingBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('store');
 
       
    }
    public function index(){
        $ratingbooks = RatingBook::paginate(10);
        return view('admin.valoracions.book.index',compact('ratingbooks'));
    }
    public function store(Request $request){
         request()->validate(['rate' => 'required']);
         $ratingbook = new RatingBook();
         $ratingbook->user_id = $request->user_id;
         $ratingbook->book_id = $request->book_id;
         $ratingbook->rate = $request->rate;
         $ratingbook->save();
         session()->flash('notif.success', 'Gracies per la teva votació!');
         return redirect()->back();
    }
}
