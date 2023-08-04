<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class AutorController extends Controller
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
        $autors = Autor::paginate(5);
        return view('admin.autors.index',compact('autors'));
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.autors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'autor_nom' => 'required|string|max:255',
        
        'biopic'=>'required',
       
        'image'=> File::types(['jpg', 'png','webp','jpeg'])
                    
                    ->max(1024),
        'active'=>'boolean'
        
             ]);
              if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('images/autors', request()->file('image'));
            
        }
         $autor = new Autor();
         $autor->autor_nom = $request->autor_nom;
         if ($request->url_foto) {
            
         $autor->url_foto = $request->url_foto;
         }else{
            $autor->image =$filePath;
         }
         $autor->slug = Str::slug($request->autor_nom) ;
         $autor->biopic = $request->biopic;
         if (Auth()->user()->type == 'admin') {
           $autor->active = $request->active;
         }
         
         $autor->user_id = $request->user_id;
        
         $autor->save();
          
        
           if (Auth()->user()->type == 'admin') {
                session()->flash('notif.success', 'Autor creat amb éxit!');
                return redirect()->route('admin.autors.index');
             }else {
                session()->flash('notif.success', 'Autor creat amb éxit!');
                return redirect()->route('home');
             }
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return view('admin.autors.show',compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        $users = User::all();
        return view('admin.autors.edit',compact('autor','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
             $request->validate([
        'autor_nom' => 'required|string|max:255',
     
        'biopic'=>'required',
       
        'active'=>'boolean',
          'image'=> File::types(['jpg', 'png','webp','jpeg'])
                    
                    ->max(1024),
        
             ]);
           if ($request->hasFile('image')) {
              if ($autor->image) {
                  Storage::disk('public')->delete($autor->image);

            $filePath = Storage::disk('public')->put('images/autors', request()->file('image'));
             $autor->image = $filePath;
              }else{
                  $filePath = Storage::disk('public')->put('images/autors', request()->file('image'));
                    $autor->image = $filePath;
              }
          
            }
         $autor->autor_nom = $request->autor_nom;
        if (empty($request->url_foto)) {
            
         $autor->url_foto = $request->url_foto;
               }else{
                $autor->url_foto = $request->url_foto;
               }
         $autor->slug = Str::slug($request->autor_nom) ;
         $autor->biopic = $request->biopic;
         $autor->active = $request->active;
         $autor->user_id = $request->user_id;
        
         $autor->update();
       
        
         session()->flash('notif.success', 'Autor actualitzat amb éxit!');
            return redirect()->route('admin.autors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
           $autor->delete();
           session()->flash('notif.success', 'Autor eliminat amb éxit!');
            return redirect()->route('admin.autors.index');
    }
    
}
