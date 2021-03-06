<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
log::debug('routes/api.php URL='.URL::current().' Request::path()='.\Request::path());


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

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('cambiacontra', 'userController@cambiacontra');
Route::post('restacontra', 'userController@restacontra');
Route::put('userso/{id}', 'userController@update');
Route::post('restacontra', 'userController@restacontra');


Route::group(['middleware' => 'auth:web'], function() {
     log::debug('routes/api.php entro en middleware path'.\Request::path());
     Route::put('users/{id}', 'userController@update');
     Route::get('users', 'userController@index');
     Route::get('users/estadistica', 'userController@estadistica');
     Route::post('boletas', 'inmueblesController@store');
     Route::post('boletas/{id}', 'boletasController@update');
     Route::put('boletas/{id}', 'boletasController@update');
     Route::get('boletas/{id}', 'boletasController@show');

     Route::put('infractores/{boleta}', 'infractoresController@store');
     Route::put('infractores/{boleta}/{id}', 'infractoresController@update');
     Route::post('infractores/{boleta}/{id}', 'infractoresController@update');
     Route::delete('infractores/{id}', 'infractoresController@destroy');

     Route::get('infractores/{boleta}', 'infractoresController@index');
     Route::get('infractores/{boleta}/{id}', 'infractoresController@show');

     Route::get('boletas', 'boletasController@index');
     Route::put('boletas/', 'boletasController@store');
     //Route::post('/sube_archivos', 'fileController@upload');
});
