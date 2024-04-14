<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:8'],
            'condicio' => ['required', 'string'],
            'avatar' => ['image'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'novetats' => ['required', 'in:Si,No'],
            'biopic'   => ['string'],
            'legal'     => ['accepted'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (request()->hasFile('avatar')) {
            $filePath = Storage::disk('public')->put('images/avatars', request()->file('avatar'));
        }
        return User::create([
            'name' => $data['name'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'condicio'  =>  $data['condicio'],
            'avatar' => $filePath ?? NULL,
            'novetats' => $data['novetats'],
            'biopic' => $data['biopic'],

        ]);
    }
    protected function registered(Request $request, $user)
    {
        session()->flash('notif.success', 'Benvingut a Tsundoku.cat . Revisa el teu correu i fes click a confirmar');
        return redirect()->route('home');
    }
}
