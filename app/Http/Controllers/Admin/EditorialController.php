<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class EditorialController extends Controller
{
   public function __construct()
   {
      $this->middleware('admin')->except('create', 'store');
   }






   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $editorials = Editorial::all();
      return view('admin.editorials.index', compact('editorials'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
      return view('admin.editorials.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $request->validate([
         'editorial_nom' => 'required|string|max:255|unique:editorials',

         'descripcio' => 'required',

         //   'active'=>'boolean',
         'url' => 'required',
         'image' => File::types(['jpg', 'png', 'webp', 'jpeg'])

            ->max(1024),

      ]);
      if ($request->hasFile('image')) {
         // put image in the public storage
         $filePath = Storage::disk('public')->put('images/editorials', request()->file('image'));
      }
      $editorial = new Editorial();
      $editorial->editorial_nom = $request->editorial_nom;
      $editorial->slug = Str::slug($request->editorial_nom);
      $editorial->descripcio = $request->descripcio;
      if ($request->logo) {
         $editorial->logo = $request->logo;
      } else {
         $editorial->image = $filePath;
      }

      if (Auth()->user()->type == 'admin') {
         $editorial->active = $request->active;
      }
      $editorial->url = $request->url;

      $editorial->user_id = $request->user_id;

      $editorial->save();


      if (Auth()->user()->type == 'admin') {
         session()->flash('notif.success', 'Editorial creada amb éxit!');
         return redirect()->route('admin.editorials.index');
      } else {
         session()->flash('notif.success', 'Editorial creada amb éxit!');
         return redirect()->route('home');
      }
   }

   /**
    * Display the specified resource.
    */
   public function show(Editorial $editorial)
   {
      return view('admin.editorials.show', compact('editorial'));
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Editorial $editorial)
   {
      $users = User::all();
      return view('admin.editorials.edit', compact('editorial', 'users'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Editorial $editorial)
   {
      $request->validate([
         'editorial_nom' => 'required|string|max:255',

         'descripcio' => 'required',

         // 'active' => 'numeric',
         'url' => 'required|string',
         'image' => File::types(['jpg', 'png', 'webp', 'jpeg'])

            ->max(1024),
      ]);
      if ($request->hasFile('image')) {
         if ($editorial->image) {
            Storage::disk('public')->delete($editorial->image);

            $filePath = Storage::disk('public')->put('images/editorials', request()->file('image'));
            $editorial->image = $filePath;
         } else {
            $filePath = Storage::disk('public')->put('images/editorials', request()->file('image'));
            $editorial->image = $filePath;
         }
      }
      $editorial->editorial_nom = $request->editorial_nom;
      $editorial->slug = Str::slug($request->editorial_nom);
      $editorial->descripcio = $request->descripcio;
      if (empty($request->logo)) {
         $editorial->logo = $request->logo;
      } else {
         $editorial->logo = $request->logo;
      }

      $editorial->active = $request->active;
      $editorial->url = $request->url;

      $editorial->user_id = $request->user_id;

      $editorial->update();

      session()->flash('notif.success', 'Editorial actualitzada amb éxit!');
      return redirect()->route('admin.editorials.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Editorial $editorial)
   {
      $editorial->delete();
      session()->flash('notif.success', 'Editorial eliminada amb éxit!');
      return redirect()->route('admin.editorials.index');
   }
}
