<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GeneralController extends Controller
{
       public function check_slug(Request $request)
      {
         $slug = Str::slug($request->autor_nom);
         return response()->json(['slug' => $slug]);
       }
         public function check_slug_editorial(Request $request)
      {
         $slug = Str::slug($request->editorial_nom);
         return response()->json(['slug' => $slug]);
       }
      public function check_slug_bookshop(Request $request)
      {
         $slug = Str::slug($request->nom);
         return response()->json(['slug' => $slug]);
       }
      public function check_slug_book(Request $request)
      {
         $slug = Str::slug($request->titol);
         return response()->json(['slug' => $slug]);
       }
       public function check_slug_genere(Request $request)
       {
          $slug = Str::slug($request->nom);
          return response()->json(['slug' => $slug]);
        }
}
