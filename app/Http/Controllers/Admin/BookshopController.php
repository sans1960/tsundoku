<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookshop;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class BookshopController extends Controller
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
        $bookshops = Bookshop::all();
        return view('admin.bookshops.index', compact('bookshops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bookshops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255|unique:bookshops',
            'image' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),

            'qui_som' => 'required',

            // 'active'=>'boolean',
            'url' => 'required|string',
            'latitud' => 'required|string',
            'longitud' => 'required|string',
            // 'zoom' => 'integer',


        ]);
        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/bookshops', request()->file('image'));
        }
        $bookshop = new Bookshop;
        $bookshop->nom = $request->nom;
        $bookshop->slug = Str::slug($request->nom);
        $bookshop->qui_som = $request->qui_som;
        $bookshop->logo = $request->logo;
        if (Auth()->user()->type == 'admin') {
            $bookshop->active = $request->active;
        }
        if ($request->logo) {
            $bookshop->logo = $request->logo;
        } else {
            $bookshop->image = $filePath;
        }
        $bookshop->url = $request->url;
        $bookshop->latitud = $request->latitud;
        $bookshop->longitud = $request->longitud;
        if ($request->zoom) {
            $bookshop->zoom = $request->zoom;
        } else {
            $bookshop->zoom = 14;
        }


        $bookshop->user_id = $request->user_id;
        $bookshop->save();


        if (Auth()->user()->type == 'admin') {
            session()->flash('notif.success', 'Llibreria creada amb éxit!');
            return redirect()->route('admin.bookshops.index');
        } else {
            session()->flash('notif.success', 'Llibreria creada amb éxit!');
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookshop $bookshop)
    {
        return view('admin.bookshops.show', compact('bookshop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookshop $bookshop)
    {
        $users = User::all();
        return view('admin.bookshops.edit', compact('bookshop', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookshop $bookshop)
    {
        $request->validate([
            'nom' => 'required|string|max:255',

            'qui_som' => 'required',
            'image' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),
            'active' => 'boolean',
            'url' => 'required|string',
            'latitud' => 'required|string',
            'longitud' => 'required|string',
            'zoom' => 'required|integer',


        ]);
        if ($request->hasFile('image')) {
            if ($bookshop->image) {
                Storage::disk('public')->delete($bookshop->image);

                $filePath = Storage::disk('public')->put('images/bookshops', request()->file('image'));
                $bookshop->image = $filePath;
            } else {
                $filePath = Storage::disk('public')->put('images/bookshops', request()->file('image'));
                $bookshop->image = $filePath;
            }
        }
        $bookshop->nom = $request->nom;
        $bookshop->slug = Str::slug($request->nom);
        $bookshop->qui_som = $request->qui_som;
        if (empty($request->logo)) {
            $bookshop->logo = $request->logo;
        } else {
            $bookshop->logo = $request->logo;
        }
        $bookshop->active = $request->active;
        $bookshop->url = $request->url;
        $bookshop->latitud = $request->latitud;
        $bookshop->longitud = $request->longitud;
        $bookshop->zoom = $request->zoom;

        $bookshop->user_id = $request->user_id;
        $bookshop->update();
        session()->flash('notif.success', 'Llibreria actualitzada amb éxit!');
        return redirect()->route('admin.bookshops.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookshop $bookshop)
    {
        $bookshop->delete();
        session()->flash('notif.success', 'Llibreria eliminada amb éxit!');
        return redirect()->route('admin.bookshops.index');
    }
}
