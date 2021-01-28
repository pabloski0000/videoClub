<?php

use App\Http\Controllers\API\PeliculaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use GuzzleHttp\Middleware;

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

Route::post('/tokens/create', [LoginController::class, 'createToken']);

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::middleware('auth:sanctum')->get('/api', function (Request $request) {
    return $request->user();
});*/

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('peliculas', PeliculaController::class);
});

Route::get('peliculas/search/{search}', [PeliculaController::class, 'search']);
