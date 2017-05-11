<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use App\Sub_rol;
use App\Rol;
use App\Pais;
use App\Tipo_doc_identidad;
use App\Ciudad;
use App\Provincia;
use App\Estado_civil;
use App\Usuario;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $path = 'usuarios';
    public function index()
    {
        $usuario=Usuario::all();
        //return $user;
        return view($this->path.'.listaUsuarios', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $pais=Pais::all();
        $tipoDocId=Tipo_doc_identidad::all();
        $ciudad=Ciudad::all();
        $provincia=Provincia::all();
        $estado=Estado_civil::all();

        return view($this->path.'.create', compact('pais','tipoDocId','ciudad','provincia','estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
               $user=new Usuario();
               $user->doc_identidad = $request->numero_identidad_usuario;
               $user->login = $request->numero_identidad_usuario;
               $user->clave = $request->numero_identidad_usuario;
               $user->apellidos=$request->apellido_usuario;
               $user->nombres=$request->nombre_usuario;
               $user->sexo=$request->sexo_usuario;
               $user->fecha_nac=$request->fecha_nac_usuario;
               $user->usuario_activo='SI';
               $user->inscribir_adm='SI';
               $user->estilo='Moderno';
               $user->subir_foto='NO';
               $user->id_estado_civil=$request->estado_civil_usuario;
               $user->id_provincia=$request->provincia_usuario;
               $user->ciudad_expedido_doc=$request->expedido_usuario;
               $user->id_tipo_Doc_identidad=$request->tipo_doc_usuario;
               $user->save();
                //return $user;
               return redirect()->route($this->path.'.index');
           } catch (Exception $e) {
               return "Fatal Error -".$e->getMessage();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Usuario::join('estado_civiles','estado_civiles.id','=','usuarios.id_estado_civil')->select('usuarios.id','usuarios.nombres','usuarios.apellidos', 'usuarios.sexo','usuarios.fecha_nac', 'estado_civiles.estado_civil')->where('usuarios.id','=',$id)->get()->first();
        $pais=Pais::all();
        $tipoDocId=Tipo_doc_identidad::all();
        $ciudad=Ciudad::all();
        $provincia=Provincia::all();
        $estado=Estado_civil::all();

        //return $user;
        return view($this->path.'.editarUsuario', compact('pais','tipoDocId','ciudad','provincia','estado','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=Usuario::findOrFail($id);
        $user->doc_identidad = $request->numero_identidad_usuario;
        $user->login = $request->numero_identidad_usuario;
        $user->clave = $request->numero_identidad_usuario;
        $user->apellidos=$request->apellido_usuario;
        $user->nombres=$request->nombre_usuario;
        $user->sexo=$request->sexo_usuario;
        $user->fecha_nac=$request->fecha_nac_usuario;
        $user->usuario_activo='SI';
        $user->inscribir_adm='SI';
        $user->estilo='Moderno';
        $user->subir_foto='NO';
        $user->id_estado_civil=$request->estado_civil_usuario;
        $user->id_provincia=$request->provincia_usuario;
        $user->ciudad_expedido_doc=$request->expedido_usuario;
        $user->id_tipo_Doc_identidad=$request->tipo_doc_usuario;
        $user->save();
        return redirect()->route($this->path.'.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = Usuario::findOrFail($id);
            $user->delete(); 
            //return redirect()->route('rols.index');
            return redirect()->route($this->path.'.index');
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}
