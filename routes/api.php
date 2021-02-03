<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PeliculaController;
use App\Http\Controllers\Auth\LoginController;


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

Route::post('/tokens/create', [LoginController::class,'createToken']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->apiResource('peliculas', PeliculaController::class);

Route::get('peliculas/search/{search}', [PeliculaController::class, 'search'])->name('peliculas.search');

Route::post('peliculas/newOMDB/{idFilm}', [PeliculaController::class, 'storeOMDB']);
