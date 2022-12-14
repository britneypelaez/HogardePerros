<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('Home.ServiciosVeterinario');
})->name('servicios');

Route::get('/QuienesSomos', function () {
    return view('Home.QuienesSomos');
})->name('QuienesSomos');

Route::get('/PreguntasFrecuentes', function () {
    return view('Home.PreguntasFrecuentes');
})->name('PreguntasFrecuentes');

Route::get('/InicioAdmin', function () {
    return view('HomeAdministrador.InicioAdmin');
})->name('InicioAdmin');

Route::get('admin/register', function () {
    auth()->logout();
    return view('auth.registro');
})->name('admin/register');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Google login
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExiste = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if ($userExiste) {
        Auth::login($userExiste);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'role_id' => 2,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }

    return redirect('/admin');
});

