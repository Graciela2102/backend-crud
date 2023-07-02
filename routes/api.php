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
//obtener listado
Route::get('/products','App\Http\Controllers\ProductController@index');
//crear producto
Route::post('/products','App\Http\Controllers\ProductController@store');
//Actualizar producto
Route::put('/products/{id}','App\Http\Controllers\ProductController@update');
//Eliminar producto
Route::delete('/products/{id}','App\Http\Controllers\ProductController@destroy');
