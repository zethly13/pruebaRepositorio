<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Modalidad_titulacion;

class TitulacionController extends Controller
{
    
    public function index()
    {
       $modalidades=Modalidad_titulacion::all()->pluck('nombre_modalidad','id');
       return view('titulacion.index',compact('modalidades')); 
    }

    public function crear(Request $request)
    {
        $modalidad=Modalidad_titulacion::where('id','=',$request->modalidades)->get()->first();
        $cantidad=$request->cantidad;
        switch ($request->modalidades) {
            case '1':
                return view('titulacion.proy_grado.create',compact('cantidad','modalidad'));
                break;
            case '2':
               return view('titulacion.adscripcion.create',compact('cantidad','modalidad'));
                break;
            case '3':
               return view('titulacion.trab_dirigido.create',compact('cantidad','modalidad'));
                break;
            case '4':
               return "aun no hay";
                break;
            case '5':
               return "aun no hay";
                break;
            case '6':
               return "aun no hay";
                break;
            case '7':
               return "aun no hay";
                break;
        }
        //return $request;
    }

    public function create(request $request)
    {
        //
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
