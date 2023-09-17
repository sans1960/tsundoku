<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComentBook;

class ComentBookController extends Controller
{
    
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
}
