<?php

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
use Illuminate\Support\Facades\Log;
use App\User;
use App\Perfiles;
use App\Alcaldias;
use App\Entidades;
use App\Infracciones;
use App\Http\Controllers\userController;
log::debug('routes/web.php inioio URL='.URL::current().' Request::path()='.\Request::path());
Route::get('/', function () {
    log::debug('routes/web.php va a ejecutar welcome / URL='.URL::current().' Request::path()='.\Request::path());
    \Request::session()->invalidate();
    Auth::logout();
    return view('welcome');
})->name('login');

Route::get('mail_OlvidoContrasena', function () {
    $user = App\User::find(1);
    return new App\Mail\OlvidoContrasena($user);
});

Route::get('/restaura/{si}', function () {
      log::debug('Por donde se fue 00');
      return view('restaura');
});


Route::get('/correo_registro', function () {
  $user = App\User::find(4);
  return new App\Mail\UserRegistrado($user);
  });

Route::get('/correo_aceptado', function () {
  $user = App\User::getconCatalogosbyID(16);
  return new App\Mail\UserAceptado($user);
  });

  Route::get('/inmueble_registro_exitoso', function () {
      return view('correos.inmueble_registrado');
  });

Route::get('/perfil_tercer_acreditado', function () {
    return view('perfil_tercer_acreditado');
});

Route::get('/notienecuenta', function () {
    $alcaldias = Alcaldias::all();
    return view('notienecuenta')->with('alcaldias', $alcaldias);
});

Route::get('/404error', function () {
    return view('error404');
});


//Secretaria
Route::get('/cambio-contra', function () {
         return view('cambio-contra');
    });


Route::group(['middleware' => ['auth:web']], function() {
    log::debug('routes/web.php Entro a middleware web '.URL::current());
    Route::get('/terceros-acreditados-registrados', function () {
        $perfiles = Perfiles::all();
        return view('secretaria.terceros-acreditados-secretaria')->with('perfiles', $perfiles);
    });
    Route::get('/registro-exitoso', function () {
         return view('registro-exitoso');
    });

    Route::get('/registro-inmueble-exitoso/{id}', function ($id) {
         $inmueble= Inmuebles::where('id','=',$id)->get();
         return view('registro-inmueble-exitoso')->with('inmueble', $inmueble[0]);
    });

    Route::get('/expedientes', function () {
        return view('expedientes');
    });
    Route::get('/detalle-tercer-acreditado-tercero/{id}', 'userController@detalleterceracreditadotercero');
    Route::get('/detalle-tercer-acreditado/{id}', 'userController@detalleterceracreditado');

    Route::get('/informacion-actualizada', function () {
         return view('perfil-actualizado');
    });


    Route::get('/establecimientos-registrados-seleccionados-secretaria', function () {
        return view('secretaria.establecimientos-registrados-secretaria-seleccionados');
    });

    Route::get('/establecimientos-registrados-todos-secretaria', 'establecimientosController@establecimientosIndex');
    Route::get('/inmuebles-registrados-todos-secretaria',  function () {
              $alcaldias = Alcaldias::all();
              return view('secretaria.inmuebles-registrados-secretaria-todos')->with('alcaldias', $alcaldias);
             });

    Route::get('/estadistica-acreditados',  function () {
              return view('estadistica-acreditados');
             });

    Route::get('/inmuebles-registrados-secretaria/{id}', 'inmueblesController@detalleInmueble');

    Route::get('/inmuebles-registrados/{rfc}', 'inmueblesController@inmueblesByEstablecimientos');


    Route::get('crearexpediente/',  function () {
           $alcaldias = Alcaldias::all();
           $entidades = Entidades::all();
           $infracciones = Infracciones::all();
           $data = array (
              'alcaldias' => $alcaldias,
              'entidades' => $entidades,
              'infracciones' => $infracciones
           );
           return view('crearexpediente')->with('data', $data);
    });
    Route::get('crearexpediente/{id}',  function () {
           $alcaldias = Alcaldias::all();
           $entidades = Entidades::all();
           $infracciones = Infracciones::all();
           $data = array (
              'alcaldias' => $alcaldias,
              'entidades' => $entidades,
              'infracciones' => $infracciones
           );
              return view('crearexpediente')->with('data', $data);
    });

    //Editar perfil

    Route::get('/editar_perfil/{id}', 'userController@editarPerfil');
Route::get('/establecimientos-registrados-alcaldia-todos', function () {
    return view('alcaldia.establecimientos-registrados-alcaldia-todos');
});
Route::get('/establecimientos-registrados-alcaldia-seleccionados', function () {
    return view('alcaldia.establecimientos-registrados-alcaldia-seleccionados');
});

Route::get('/establecimientos-registrados-alcaldia', function () {
    return view('alcaldia.establecimientos-alcaldias');
});


});

