<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingBook;

class RatingBookController extends Controller
{
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
