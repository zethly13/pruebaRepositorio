<?php
use App\Usuario;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

Route::group(['middleware'=>'guest'],function(){
	 
Route::any('/','UsuariosController@login')->name('usuarios.login');
Route::any('/login','UsuariosController@login')->name('usuarios.login');
Route::post('logear','UsuariosController@logear')->name('usuarios.logear');
});

// titulacion 
Route::post('titulacion/addAmbiente','TitulacionController@addAmbiente')->name('titulacion.addAmbiente');
Route::post('titulacion/addPresidente','TitulacionController@addPresidente')->name('titulacion.addPresidente');
Route::post('titulacion/addMiembro','TitulacionController@addMiembro')->name('titulacion.addMiembro');
Route::post('titulacion/addTutor','TitulacionController@addTutor')->name('titulacion.addTutor');
Route::post('titulacion/addDecano','TitulacionController@addDecano')->name('titulacion.addDecano');


Route::get('titulacion/buscar','TitulacionController@buscar')->name('titulacion.buscar');
Route::get('titulacion/search/{cod_sis}','TitulacionController@search');
Route::post('/titulacion/crear','TitulacionController@crear')->name('titulacion.crear');
Route::resource('titulacion', 'TitulacionController');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    //dd($q);
    if($q!=""){
   		$user = Usuario::where('nombres','LIKE','%'.$q.'%')->orWhere('apellidos','LIKE','%'.$q.'%')->get();	
    	if(count($user) > 0)
        return view('titulacion.search')
    	//return redirect::back()
    		->withDetails($user)
    		->withQuery( $q );
    }
    else return "no se encontro usuario";
});



Route::get('titulacion/generar/designacionTribunal','TitulacionController@generar_designacionTribunal')->name('designacionTribunal.pdf');
Route::get('titulacion/generar/primerRecordatorio','TitulacionController@generar_primerRecordatorio')->name('primerRecordatorio.pdf');
Route::get('titulacion/generar/actaDefensa','TitulacionController@generar_actaDefensa')->name('actaDefensa.pdf');
Route::get('titulacion/generar/testimonio','TitulacionController@generar_testimonio')->name('testimonio.pdf');

// &&&&&&&&&&&&&&&&

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
	 Route::get('gestiones/subir_script','ScriptController@subirScript');
	 Route::post('gestiones/subir','ScriptController@importarScript')->name('gestiones.importarScript');
	Route::resource('gestiones','GestionesController');
});