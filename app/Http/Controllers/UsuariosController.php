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
        $user=Usuario::all();
        return $user;
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
               $user->doc_identidad = $request->numeroIdentidad;
               //$user->login = '';
               //$user->clave = '';
               $user->apellidos=$request->apellidos;
               $user->nombres=$request->apellidos;
               $user->sexo=$request->apellidos;
               $user->fecha_nac=$request->apellidos;
               $user->usuario_activo='SI';
               $user->inscribir_adm='SI';
               $user->estilo='Moderno';
               $user->subir_foto=$request->apellidos;
               $user->id_estado_civil=$request->estado_civil;
               $user->id_provincia=$request->provincia;
               $user->ciudad_expedido_doc=$request->expedido;
               $user->id_tipo_Doc_identidad=$request->tipo_doc;
               $user->save();
                return $user;
               //return redirect()->route($this->path.'.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
