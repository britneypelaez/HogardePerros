<?php

use App\Http\Controllers\CampaniaController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\MascotaPerdidaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ServicioPrestadoController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 *
 * Dashboard Usuarios
 *
 */
Route::get('/', [App\Http\Controllers\MascotaController::class, 'indexHome'])->name('/');

Route::get('/Adopcion', [App\Http\Controllers\MascotaController::class, 'indexAdopcionCliente'])->name('Adopcion');

Route::get('/servicios', [App\Http\Controllers\ServicioController::class, 'indexServicioCliente'])->name('servicios');

Route::get('/encuentrame', [App\Http\Controllers\MascotaPerdidaController::class, 'indexEncuentrameCliente'])->name('encuentrame');

Route::get('/Publicaciones', [App\Http\Controllers\MascotaPerdidaController::class, 'publicacionUsuario'])->name('Publicaciones');

Route::get('/Filtrar', [App\Http\Controllers\MascotaController::class, 'indexFiltro'])->name('Filtrar');


Route::get('/QuienesSomos', function () {
    return view('Home.QuienesSomos');
})->name('QuienesSomos');

Route::get('/Donaciones', function () {
    return view('Home.Donaciones');
})->name('Donaciones');

Route::get('/adoptare', function () {
    return view('Home.Adoptare');
})->name('adoptare');

Route::get('/PreguntasFrecuentes', function () {
    return view('Home.PreguntasFrecuentes');
})->name('PreguntasFrecuentes');

Route::get('admin/register', function () {
    auth()->logout();
    return view('auth.registro');
})->name('admin/register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/**
 *
 * Google login
 *
 */
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExiste = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if ($userExiste) {
        Auth::login($userExiste);
        if ($userExiste->role_id == 3) {
            return redirect('/fundacion/home');
        }
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

/**
 *
 * Dashboard Fundaciones
 *
 */
Route::get('/fundacion/home', function () {
    return view('HomeFundacion.home');
})->name('fundacion.home');

Route::resources([
    'Mascotas' => MascotaController::class,
    'MascotasPerdidas' => MascotaPerdidaController::class,
    'Campanias' => CampaniaController::class,
    'Servicios' => ServicioController::class,
    'ServiciosPrestados' => ServicioPrestadoController::class,
]);

Route::post('/Publicaciones/Delete', [MascotaPerdidaController::class, 'destroyUsuario'])->name('publicacion.delete');

Route::post('/Publicaciones/Update', [MascotaPerdidaController::class, 'updateUsuario'])->name('publicacion.update');

Route::post('/Publicaciones/Create', [MascotaPerdidaController::class, 'storeUsuario'])->name('publicacion.create');

Route::view('/Fundacion/Logo', 'HomeFundacion.cambiarLogo')->name('cambiar.logo');

Route::post('/Fundacion/Logo/Change', [MascotaController::class, 'chageLogo'])->name('registrar.logo');

Route::get('Certificado', [CertificadoController::class, 'index']);

Route::get('/InicioAdmin', function () {
    return view('HomeAdministrador.InicioAdmin');
})->name('InicioAdmin');
