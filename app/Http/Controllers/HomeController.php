<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        return view('admin.index');
    }
    public function lector()
    {
        return view('lector');
    }
    public function autor()
    {
        return view('autor');
    }
    public function editorial()
    {
        return view('editorial');
    }
    public function llibreria()
    {
        return view('llibreria');
    }
}
