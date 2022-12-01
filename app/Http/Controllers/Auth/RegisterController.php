<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Response;
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
        
        // try {
        //     $rules = [
        //         'name' => [
        //             'required',
        //             'string',
        //             'max:20',
        //         ],
        //         'email' => [
        //             'required',
        //             'string',
        //             'email',
        //             'max:20',
        //             'unique:users'
        //         ],
        //         'password' => [
        //             'required',
        //             'string',
        //             'min:8',
        //             'confirmed'
        //         ]
        //     ];

        //     $messages = [
        //         'required' => 'El campo :attribute es obligatorio',
        //         'string'    => ':attribute debe ser texto.',
        //         'min'       => 'La :attribute debe tener minimo :min caracteres.',
        //         'max'       => 'El :attribute debe tener maximo :max caracteres.',
        //         'email'     => 'Parece que no es un nombre de :attribute valido .',
        //         'unique'    => 'El :attribute no es unico.',
        //         'confirmed' => ':attribute debe ser confirmado.'
        //     ];

        //     $customAttributes = [
        //         'name' => 'Nombre completo',
        //         'email' => 'Correo eletrónico',
        //         'password' => 'Contraseña',
        //     ];
            
        //     $validator = Validator::make($data, $rules, $messages);
        //     if ($validator->fails()) {
        //         return Response::json([
        //             'code' => '2001',
        //             'status' => 'error',
        //             'message' => 'Datos Recibidos Incorrectos',
        //             'errors' => $validator->messages()
        //         ], 400, [], 0);
        //     }
        // } catch (Exception $exeption) {
        //         return Response::json([
        //             'code' => '1001',
        //             'status' => 'error',
        //             'message' => 'Error En La Generación De La Solicitud'
        //             'message' => $exeption->getMessage() . ' ' . $exeption->getLine()
        //         ], 500, [], JSON_PRETTY_PRINT);
        // }
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
            'password' => Hash::make($data['password']),
        ]);
    }
}
