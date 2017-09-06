<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Acceso;
use App\Usuario;
use App\Sub_acceso;
use App\Usuario_asignar_sub_rol;

class AccesoController extends Controller
{
	
	public function index(Request $request)
	{
		$usuarios=Usuario::Buscador2($request->ci,$request->nombre,$request->apellido)->get();
		$permisosAsignados=Usuario_asignar_sub_rol::all();
		/*$permisosAsignados->each(function($permisosAsignados){
			$permisosAsignados->funcion;
			$permisosAsignados->usuario;
			$permisosAsignados->unidad;
			//$permisosAsignados->sub_rol;
			$permisosAsignados->sub_rol->rol;

		});*/
		return view('accesos.asignarUsuarioSubRol',compact('usuarios','permisosAsignados'));
	}

	public function nuevaAsignacion($id)
	{
		$permisosAsignados=Usuario_asignar_sub_rol::where('id_usuario','=',$id)->get();
		return view('accesos.nuevaAsignacion',compact('permisosAsignados'));
	}

	public function validar()
	{
	//	$acceso=Acceso::join('sub_accesos','sub_accesos.id_acceso','=','accesos.id')->select('accesos.id','accesos.nombre_acceso','accesos.ruta_acceso','nombre_sub_acceso')->get();
		$acceso=Acceso::all();
		$subAcceso=Sub_acceso::all();
		return view('accesos.lista',compact('acceso','subAcceso'));
	}

	public function validarSubAccesos($id)
	{
		$subAcceso=Sub_acceso::where('id_acceso','=',$id)->get();
		//$subAcceso=Sub_acceso::perteneceAcceso($id);
		return $subAcceso;	
	} 

	public function listaSubAccesos()
	{
		$subAcceso=Sub_acceso::all();
		return view('accesos.listaPermisos',compact('subAcceso'));
	}   
}
