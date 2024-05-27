<?php

use App\Http\Controllers\UsuarioController;
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

//Se puede utilizar ruta por ruta o agruparlas con el apiResource

/* Route::get('/usuarios', [UsuarioController::class, 'index']);

Route::post('/usuarios', [UsuarioController::class, 'store']);

Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);

Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);

Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']); */

Route::apiResource('usuarios', UsuarioController::class);


