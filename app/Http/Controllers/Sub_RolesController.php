<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Sub_rol;
use App\Rol;
use App\Sub_acceso;
use App\Acceso_sub_rol;
use App\Acceso;


class Sub_RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $path = 'sub_roles';
    public function __construct()
    {
        // Filtrar todos los métodos
    
        $this->middleware('permisos:5', ['only' => 'index','create','store']);
        $this->middleware('permisos:6', ['only' => 'index','edit','update','delete']);
    }
    public function index()
    {
        $subroles=Sub_rol::all();
        $sRoles=Sub_rol::join('roles','roles.id','=','sub_roles.id_rol')->select('sub_roles.id','sub_roles.nombre_sub_rol','sub_roles.descripcion_sub_rol', 'roles.nombre_rol')->get();
        return view($this->path.'.index',compact('sRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol= Rol::all();
        $subAcceso=Sub_acceso::all();
        $acceso = Acceso::all();
        //return $rol;
        return view($this->path.'.create',compact('rol','subAcceso','acceso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        try {
               $subRol = new Sub_rol();
               /*$this->validate($request,[
                'nombre_rol' => 'required|max:100',
                'desc_rol'=>'required|max:100',
                ]);
*/
               $subRol->nombre_sub_rol = $request->nombre_sub_rol;
               $subRol->descripcion_sub_rol = $request->desc_sub_rol;
               $subRol->id_rol=$request->rol_seleccionado;
               $subRol->save();
               $sub_accesos=$request->permiso;
               if(is_array($sub_accesos))
                {
                    foreach ($sub_accesos as $id_sub_acceso) 
                    {
                     
                    $subAcceso=new Acceso_sub_rol();
                    $subAcceso->id_sub_rol =    $subRol->id;
                    $subAcceso->id_sub_acceso = $id_sub_acceso;
                    $subAcceso->save();
                    }
               }
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
        //$sRol = Sub_rol::findOrFail($id);
        $sRol=Sub_rol::join('roles','roles.id','=','sub_roles.id_rol')->select('sub_roles.id','sub_roles.nombre_sub_rol','sub_roles.descripcion_sub_rol', 'sub_roles.id_rol','roles.nombre_rol')->where('sub_roles.id','=',$id)->get()->first();
        $accesos=Acceso::all();
        $rol= Rol::all();
        $subAcceso=Sub_acceso::all();
        $subAccesoDefinidos=Sub_rol::join('acceso_sub_roles','acceso_sub_roles.id_sub_rol','=','sub_roles.id')->select('acceso_sub_roles.id_sub_acceso')->where('sub_roles.id','=',$id)->get();
        //return $subAccesoDefinidos;
        return view($this->path.'.edit', compact('sRol','accesos','subAcceso','subAccesoDefinidos', 'rol'));
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
        $sRol_editar=Sub_rol::findOrFail($id);
        $sRol_editar->nombre_sub_rol     = $request->nombre_sub_rol;
        $sRol_editar->descripcion_sub_rol= $request->desc_sub_rol;
        $sRol_editar->id_rol= $request->rol_seleccionado;
        $sRol_editar->save();
        
        $sub_accesos=$request->permiso;
            $id_eliminar=Acceso_sub_rol::select('id')->where('id_sub_rol','=',$sRol_editar->id)->get();

            //return $id_eliminar;

        foreach($id_eliminar as $eliminar){
            $borrarAcceso= Acceso_sub_rol::findorfail($eliminar->id);
            $borrarAcceso->delete();
        }

        foreach($sub_accesos as $id_sub_acceso) 
        {
            $subAccesoModificado=new Acceso_sub_rol();
            $subAccesoModificado->id_sub_acceso = $id_sub_acceso;

            $subAccesoModificado->id_sub_rol =    $sRol_editar->id;
            $subAccesoModificado->save();
        /*
            $subAcceso->id_sub_rol =    $subRol->id;
        return $request->permiso;
        
        $registros=Modelo::where('condicion','tal')->get();

        */
        }

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
            $sRolEliminar = Sub_rol::findOrFail($id);
            $sRolEliminar->delete(); 
            //return redirect()->route('rols.index');
            return redirect()->route($this->path.'.index');
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}
