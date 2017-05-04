<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Sub_rol;
use App\Rol;

class Sub_RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $path = 'sub_roles';
    public function index()
    {
        $subroles=Sub_rol::all();
        $sRoles=Sub_rol::join('roles','roles.id','=','sub_roles.id_rol')->select('sub_roles.id','sub_roles.nombre_sub_rol','sub_roles.descripcion_sub_rol', 'roles.nombre_rol')->get();
//        $rol_sub_rol = $subroles->rol();
        //$rol = Rol::where($id,'=',$sub_rol->id_rol)->get();
        //return $sRoles;
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
        //return $rol;
        return view($this->path.'.create',compact('rol'));
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
               // return $subRol;
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
        $rol=Rol::all();
        //return $sRol;
        return view($this->path.'.edit', compact('sRol','rol'));
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
