<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Modalidad_titulacion;
use App\Usuario;
use App\Funcion;
use App\Ambiente;
use App\Tipo_ambiente;
use App\Unidad;
use App\Usuario_asignar_sub_rol;
use DB;
class TitulacionController extends Controller
{
    
    public function index()
    {
       $modalidades=Modalidad_titulacion::all()->pluck('nombre_modalidad','id');
       return view('titulacion.index',compact('modalidades')); 
    }

    public function crear(Request $request)
    {
        $funcionPresidentes=usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->where('Usuario_asignar_sub_roles.id_funcion','=',4)->get();
        $funcionMiembro=usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->where('Usuario_asignar_sub_roles.id_funcion','=',1)->orwhere('Usuario_asignar_sub_roles.id_funcion','=',2)->orwhere('Usuario_asignar_sub_roles.id_funcion','=',4)->orwhere('Usuario_asignar_sub_roles.id_funcion','=',5)->get();
        
        $funcionTutor=usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->where('Usuario_asignar_sub_roles.id_funcion','=',1)->get();
        $funcionDecano=usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->where('Usuario_asignar_sub_roles.id_funcion','=',9)->get();
        $ambiente=ambiente::all()->pluck('nombre_ambiente');
        $tipo_ambiente=Tipo_ambiente::all()->pluck('nombre_tipo_ambiente','id');
        $unidad=Unidad::all()->pluck('nombre_unidad','id');

        $modalidad=Modalidad_titulacion::where('id','=',$request->modalidades)->get()->first();
        $cantidad=$request->cantidad;
        switch ($request->modalidades) {
            case '1':
                return view('titulacion.proy_grado.create',compact('cantidad','modalidad','funcionPresidentes','funcionMiembro','funcionTutor','funcionDecano','ambiente','tipo_ambiente','unidad'));
                break;
            case '2':
               return view('titulacion.adscripcion.create',compact('cantidad','modalidad','funcionPresidentes','funcionMiembro','funcionTutor','funcionDecano','ambiente','tipo_ambiente','unidad'));
                break;
            case '3':
               return view('titulacion.trab_dirigido.create',compact('cantidad','modalidad','unidad'));
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

    }

    public function buscar(){
        return view('titulacion.search');
    }

    public function search($cod_sis){

        $usuarios=Usuario_asignar_sub_rol::where('cod_sis', $cod_sis)
                    ->join('usuarios','usuario_asignar_sub_roles.id_usuario','=','usuarios.id')
                    ->select('usuarios.id', 'usuarios.nombres', 'usuarios.apellidos','usuarios.doc_identidad')
                    ->get();
        return response($usuarios);

        //                                     ->orwhere('apellidos','like','%'.$request->search.'%')->get();
        //     if($usuarios)
        //     {
        //     foreach ($usuarios as $key => $value) {
        //         $output.='<tr>'.
        //                  '<td>'.$usuarios->id.'</td>'.
        //                  '<td>'.$usuarios->nombres.'</td>'.
        //                  '<td>'.$usuarios->apellidos.'</td>'.
        //                  '</tr>';
        //     }
        //     return response($output);
        //     }
        // }

    }

    public function addAmbiente(Request $request){

       $ambiente = new Ambiente();
        $ambiente->nombre_ambiente =$request->nombreAmbiente;
        $ambiente->id_tipo_ambiente = 2;
        $ambiente->id_unidad =7;
        $ambiente->max_estudiantes = $request->cantEstudiantes;
        $ambiente->ambiente_activo ='SI';
        $ambiente->save();
      return redirect::back();        
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

    public function generar_designacionTribunal()
    {
        $modalidad = Modalidad_titulacion::all();
        $view = \View::make('titulacion.designacionTribunal', compact('modalidad'))->render();
       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('designacionTribunal.pdf');    
        
    }

     public function generar_primerRecordatorio()
    {
        $modalidad = Modalidad_titulacion::all();
        $view = \View::make('titulacion.primerRecordatorio', compact('modalidad'))->render();
       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('primerRecordatorio.pdf');    
        
    }

     public function generar_actaDefensa()
    {
        $modalidad = Modalidad_titulacion::all();
        $view = \View::make('titulacion.actaDefensa', compact('modalidad'))->render();
       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('actaDefensa.pdf');    
        
    }

     public function generar_testimonio()
    {
        $modalidad = Modalidad_titulacion::all();
        $view = \View::make('titulacion.testimonio', compact('modalidad'))->render();
       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('testimoni.pdf');    
        
    }

}
