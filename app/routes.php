<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#esta función devuelve la pagina principal de la aplicación (hello.php)
#Route::get('/', function(){
#	return View::make('hello');
#});

#limita el parámetro pass para sólo recibir enteros
Route::get('anotherpg/{usr}-{pass}', function($usr, $pass){
	return "hello $usr $pass";
})
->where('pass', '[0-9]+'); 


// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showlogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postlogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function(){

	#esta función devuelve la pagina 'anotherpg.php'
	Route::get('anotherpg', function(){
		return View::make('anotherpg');
	});

    // Esta será nuestra ruta de bienvenida.
	Route::get('/', function(){
		return View::make('hello');
	});

    // Esta ruta nos servirá para cerrar sesión.
	Route::get('logout', 'AuthController@logOut');

});
