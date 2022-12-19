<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('adopcion/search', [App\Http\Controllers\MascotaController::class, 'search']);

Route::get('encuentrame/search', [App\Http\Controllers\MascotaPerdidaController::class, 'search']);

Route::get('raza/search', [App\Http\Controllers\RazaController::class, 'search']);
