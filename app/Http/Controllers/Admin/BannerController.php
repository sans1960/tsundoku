<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'url' => 'required',
            'posicio' => 'required',
            'actiu' => 'required',
            'image' => File::types(['jpg', 'png', 'webp', 'jpeg'])

                ->max(1024),
        ]);
        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/banners', request()->file('image'));
        }
        $banner = new Banner();
        $banner->nom = $request->nom;
        $banner->url = $request->url;
        $banner->posicio = $request->posicio;
        $banner->actiu = $request->actiu;
        $banner->image = $filePath;
        $banner->save();
        session()->flash('notif.success', 'Banner creat amb éxit!');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'nom' => 'required',
            'url' => 'required',
            'posicio' => 'required',
            'actiu' => 'required',



        ]);
        $banner->nom = $request->nom;
        $banner->url = $request->url;
        $banner->posicio = $request->posicio;
        $banner->actiu = $request->actiu;
        $banner->update();
        session()->flash('notif.success', 'Banner actualitzat amb éxit!');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->image);
        $banner->delete();
        session()->flash('notif.success', 'Banner eliminat');
        return redirect()->route('admin.banners.index');
    }
}
