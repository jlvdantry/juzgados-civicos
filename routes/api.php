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
     log::debug('routes/api.php entro en middleware');
     Route::put('users/{id}', 'userController@update');
     Route::get('users', 'userController@index');
     Route::get('users/estadistica', 'userController@estadistica');
     Route::post('establecimientos', 'establecimientosController@store');
     Route::get('establecimientos/{id}', 'establecimientosController@show');
     Route::get('establecimientos/{id}/{inm}', 'establecimientosController@show');
     Route::delete('establecimientos/{id}', 'establecimientosController@destroy');
     Route::delete('establecimientos/{rfc}/{email}', 'establecimientosController@destroyRfcEmailA');
     Route::get('establecimientos', 'establecimientosController@index');
     Route::post('boletas', 'inmueblesController@store');
     Route::post('boletas/{id}', 'boletasController@update');
     Route::put('boletas/{id}', 'boletasController@update');
     Route::get('boletas/{id}', 'boletasController@show');

     Route::put('infractores/{boleta}', 'infractoresController@store');
     Route::put('infractores/{boleta}/{id}', 'infractoresController@update');
     Route::post('infractores/{boleta}/{id}', 'infractoresController@update');

     Route::get('infractores/{boleta}', 'infractoresController@index');
     Route::get('infractores/{boleta}/{id}', 'infractoresController@show');

     Route::get('inmuebles/{rfc}/{email}', 'inmueblesController@showRfcEmailA');
     Route::get('boletas', 'boletasController@index');
     Route::delete('inmuebles/{id}', 'inmueblesController@destroy');
     Route::delete('simulacros/{id}', 'simulacrosController@destroy');
     Route::delete('comites/{id}', 'comitesController@destroy');
     Route::put('boletas/', 'boletasController@store');
     Route::delete('puntor/{id}', 'puntorController@destroy');
     Route::get('establecimientos-search/{name}/{rfc}', 'establecimientosController@busquedaEstablecimientoSolicitante');
     //Route::post('/sube_archivos', 'fileController@upload');
});
