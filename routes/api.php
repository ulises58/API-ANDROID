<?php

use Illuminate\Http\Request;

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
// Controlador register
Route::post('register', 'Api\Auth\RegisterController@register');

// controlador login
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');
Route::post('logout', 'Api\Auth\LoginController@logout');



// Todas las rutas que tinen que ser portegidas por el token

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
