<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ss
*/
Route::group(['middleware'=>'guest'],function(){
	
Route::any('/','UsuariosController@login')->name('usuarios.login');
Route::any('/login','UsuariosController@login')->name('usuarios.login');
Route::post('logear','UsuariosController@logear')->name('usuarios.logear');
});

Route::post('usuarios/ciudades/{id}','UsuariosController@getCiudades');
Route::post('usuarios/provincias/{id}','UsuariosController@getProvincias');
//Route::any('usuarios/acceso/{id}','UsuariosController@subRolesAsignadosMenu')->name('usuarios.subRolesAsignadosMenu');


Route::group(['middleware'=>'autentificado'], function(){
	Route::get('usuarios/loginModificar','UsuariosController@loginModificar')->name('usuarios.loginModificar');
	Route::get('usuarios/contrasenaModificar','UsuariosController@contrasenaModificar')->name('usuarios.contrasenaModificar');
	Route::post('usuarios/{id}/validarModLogin','UsuariosController@validarModLogin')->name('usuarios.validarModLogin');
	Route::post('usuarios/{id}/validarModContrasena','UsuariosController@ValidarModContrasena')->name('usuarios.validarModContrasena');
	Route::resource('roles', 'RolesController');
	Route::resource('sub_roles', 'Sub_RolesController');
	Route::resource('usuarios', 'UsuariosController');
	
Route::get('logout', 'UsuariosController@logout')->name('usuarios.logout');
	Route::get('/home','homeController@index')->name('home.index');
	Route::GET('usuario/perfil', 'UsuariosController@perfil')->name('usuarios.perfil'); 
Route::group(['middleware'=>'permisos:7'],function(){
	Route::Get('usuario/acceso','AccesoController@index')->name('accesos.index');
	Route::Get('usuario/usuario_acceso','AccesoController@index2')->name('accesos.index2');
	Route::Get('usuario/acceso/{id}','AccesoController@nuevaAsignacion')->name('accesos.nuevaAsignacion');
	Route::Get('usuario/acceso/{id}/validar','AccesoController@validarNuevaAsignacion')->name('accesos.validarNuevaAsignacion');

	Route::Get('usuario/acceso/{id}/modificar','AccesoController@modificarAsignacion')->name('accesos.modificarAsignacion');
	Route::post('usuario/acceso/{id}/validarModAsignacion','AccesoController@validarModAsignacion')->name('accesos.validarModAsignacion');
	Route::Get('usuario/acceso/{id}/modActivo','AccesoController@modActivo')->name('accesos.modActivo');
    Route::Get('gestiones/{id}/modActivo','GestionesController@modActivo')->name('gestiones.modActivo');
    
    Route::post('usuarios/{id}/crearEmail','UsuariosController@addEmail')->name('usuarios.crearEmail');
	Route::post('usuarios/{id}/crearDireccion','UsuariosController@addDireccion')->name('usuarios.crearDireccion');
	Route::post('usuarios/{id}/crearTelefono','UsuariosController@addTelefono')->name('usuarios.crearTelefono');


	Route::delete('usuarioEliminarEmail/{id}','UsuariosController@eliminarEmail')->name('usuarios.eliminarEmail');
	Route::delete('usuarioEliminarDireccion/{id}','UsuariosController@eliminarDireccion')->name('usuarios.eliminarDireccion');
	Route::delete('usuarioEliminarTelefono/{id}','UsuariosController@eliminarTelefono')->name('usuarios.eliminarTelefono');

	Route::post('usuarios/{id}/modificarEmail','UsuariosController@modificarEmail')->name('usuarios.modificarEmail');
	Route::post('usuarios/{id}/modificarDireccion','UsuariosController@modificarDireccion')->name('usuarios.modificarDireccion');
	Route::post('usuarios/{id}/modificarTelefono','UsuariosController@modificarTelefono')->name('usuarios.modificarTelefono');  
	});
	Route::resource('gestiones','GestionesController');
});