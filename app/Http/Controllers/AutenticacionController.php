<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutenticacionController extends Controller
{
    public function index()
    {
//    	return 'hola login';
        return view('login.logeo');
    }
    public function validar(Request $request)
    {
    	//return 'hola';
    	return $request;
    }
}
