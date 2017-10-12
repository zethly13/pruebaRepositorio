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
Route::any('/','UsuariosController@login');
Route::any('/login','UsuariosController@login')->name('usuarios.login');
Route::post('logear','UsuariosController@logear')->name('usuarios.logear');
Route::get('logout', 'UsuariosController@logout')->name('usuarios.logout');

Route::post('usuarios/ciudades/{id}','UsuariosController@getCiudades');
Route::post('usuarios/provincias/{id}','UsuariosController@getProvincias');
Route::any('usuarios/acceso/{id}','UsuariosController@subRolesAsignadosMenu')->name('usuarios.subRolesAsignadosMenu');


Route::group(['middleware'=>'autentificado'], function(){
	Route::get('usuarios/loginModificar','UsuariosController@loginModificar')->name('usuarios.loginModificar');
	Route::get('usuarios/contrasenaModificar','UsuariosController@contrasenaModificar')->name('usuarios.contrasenaModificar');
	Route::post('usuarios/{id}/validarModLogin','UsuariosController@validarModLogin')->name('usuarios.validarModLogin');
	Route::post('usuarios/validarModContrasena','UsuariosController@ValidarModContrasena')->name('usuarios.ValidarModContrasena');
	Route::resource('roles', 'RolesController');
	Route::resource('sub_roles', 'Sub_RolesController');
	Route::resource('usuarios', 'UsuariosController');
	Route::GET('usuario/perfil', 'UsuariosController@perfil')->name('usuarios.perfil');
	Route::Get('usuario/acceso','AccesoController@index')->name('accesos.index');

	Route::Get('usuario/acceso/{id}','AccesoController@nuevaAsignacion')->name('accesos.nuevaAsignacion');
	Route::Get('usuario/acceso/{id}/validar','AccesoController@validarNuevaAsignacion')->name('accesos.validarNuevaAsignacion');

	Route::Get('usuario/acceso/{id}/modificar','AccesoController@modificarAsignacion')->name('accesos.modificarAsignacion');
	Route::post('usuario/acceso/{id}/validarModAsignacion','AccesoController@validarModAsignacion')->name('accesos.validarModAsignacion');
	//Route::Get('usuario/acceso/{id}','AccesoController@validarSubAccesos')->name('accesos.listaSubAcceso');
	Route::Get('usuario/acceso/{id}/modActivo','AccesoController@modActivo')->name('accesos.modActivo');
	Route::Get('usuario/permisos','AccesoController@listaSubAccesos');
});