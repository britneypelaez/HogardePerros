<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            ],
            [
                'required'  => 'Te falto ingresar el/la :attribute.',
                'string'    => ':attribute debe ser texto.',
                'min'       => 'La :attribute debe tener minimo :min caracteres.',
                'max'       => 'El :attribute debe tener maximo :max caracteres.',
                'email'     => 'Parece que no es un nombre de :attribute valido .',
                'unique'    => 'El :attribute no es unico.',
                'confirmed' => ':attribute debe ser confirmado.'
            ],
            [
                'name'     => 'Nombre de usuario',
                'email'    => 'Correo eletronico',
                'password' => 'Contraseña'
            ]
        );
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => 2,
            'password' => Hash::make($data['password']),
        ]);
    }
}
