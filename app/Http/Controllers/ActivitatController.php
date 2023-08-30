<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class ActivitatController extends Controller
{
    public function activitat($id){
        $user = User::find($id);
        $books = Book::all();
        return view('activitat',compact('user','books'));

    }
}
