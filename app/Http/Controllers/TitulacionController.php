<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class TitulacionController extends Controller
{
    
    public function index()
    {
       return view('titulacion.index'); 
    }

    public function create(request $request)
    {
        
        return view('titulacion.proy_grado.create',compact('fecha'));
       
        //return view('titulacion.adscripcion.create',compact('fecha'));
        
    

    }

    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
