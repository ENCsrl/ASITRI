<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::group(['middleware' => ['auth']], function () {
    Route::resource('/areas', 'AreaController');
	Route::get('/areaNueva', 'AreaController@create');

	Route::resource('/proyectos','ProyectoController');

	Route::get('/home', 'HomeController@index');

	Route::get('/create', 'ProyectoController@create');
	Route::post('/create', 'ProyectoController@store');

	//aqui introduciento
	Route::resource('/carreras','CarreraController');
	Route::get('/formulario','PerfilController@create');
	Route::post('/formulario','PerfilController@store');
	Route::get('/carreras','CarreraController@index');
	Route::get('/crear','CarreraController@create');
	Route::post('/crear','CarreraController@store');
	// Route::resource('/crear','CarreraController');
	Route::get('/creates','ProfileController@create');
	Route::get('/perfil','ProyectoController@indice');
	Route::get('/perfil','ProyectoController@create');
	Route::get('/perfiles','ProyectoController@indices');
	Route::get('/perfiles','ProyectoController@create');
	Route::get('/perfilesr','ProyectoController@indicereg'); //for form perfil
	// Route::get('/perfilesr','ProyectoController@indexPerfil');
	//  lunes
	Route::get('/registry','PerfilController@index');
	Route::post('/registry','PerfilController@store');
	//
	//Route::get('/reportes','ProyectoController');
	//Route::get('/creates','ProfileController@index');
	// nuevamente ingresando 20/10/18
	// Route::get('/carreras','CarreraController@crear');
	// Route::post('/carreras','CarreraController@guardar');

	Route::post('/creates','ProfileController@store');
   // elmina
	Route::resource('/proyectos', 'ProyectoController');
	Route::get('/proyectos/{id}', 'ProyectoController@show');

	Route::get('/proyecto/detalle/{id}', 'ProyectoController@detalles');

	Route::resource('/estudiante', 'EstudianteController');

	//Route::resource('/tutorproyecto', 'DocenteController@create_sub');
	Route::get('/proyecto_est', 'EstudianteController@proyc_est');
	Route::resource('/proyecto_estudiante', 'Proyecto_estudianteController');
	//Route::resource('/estudianteproyecto', 'DocenteController@create_sub');
	Route::get('/estudiante/{id}/proyecto', 'ProyectoController@proyectoEstudiante');
	Route::get('/estudiante/proyecto/{id}/tribunales', 'ProyectoController@posiblesTribunales');
	Route::get('/estudiante/proyecto/{id}/renuncia', 'ProyectoController@renunciaTribunales');
	Route::post('/estudiante/proyecto/defensa', 'ProyectoController@defensa');
	Route::get('/estudiante/proyecto/{idProy}/{idDoc}/asignacion', 'ProyectoController@asignarTribunal');
	Route::post('/estudiante/proyecto/renuncia', 'ProyectoController@renunciaTribunal');

	
	

	Route::resource('/tribunales', 'AsignacionController');

	Route::get('/tribunales/asignacion', 'AsignacionController@asignacion');

	Route::resource('/docente', 'DocenteController');
	Route::get('/docenteNuevo', 'DocenteController@create');
	Route::resource('/email', 'EmailController');

	Route::get('/reporteGeneral', 'ProyectoController@reporteGeneral');
});


