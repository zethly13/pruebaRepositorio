<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Acceso;
use App\Usuario;


class AccesoController extends Controller
{
	public function validar()
	{
		$acceso=Acceso::all();
		return view('accesos.lista',compact('acceso'));
	}    //
}
