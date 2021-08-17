<?php

use App\Http\Controllers\ProdutoController;
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

Route::post('auth/login', [\App\Http\Controllers\UserController::class,'authenticate']);
Route::resource('users', \App\Http\Controllers\UserController::class);




Route::group(['middleware' => ['apiJwt']], function(){
    Route::apiResource('produtos', ProdutoController::class);
});

