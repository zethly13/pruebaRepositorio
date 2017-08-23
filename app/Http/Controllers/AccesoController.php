<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Acceso;
use App\Usuario;
use App\Sub_acceso;


class AccesoController extends Controller
{
	
	public function index()
	{
		return view('accesos.asignarUsuarioSubRol');
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
