<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rol;
use Illuminate\Support\Facades\Input; //tati validacion
use App\Http\Requests\rolesRequest;//msj validaction tati

class RolesController extends Controller
{
    private $path = 'roles';
    public function __construct()
    {
        // Filtrar todos los métodos
        $this->middleware('permisos:3', ['only' => 'create','store']);
        $this->middleware('permisos:3,4', ['only' => 'index']);
        $this->middleware('permisos:4', ['only' => 'update','edit','destroy']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol= Rol::all();
        //$rol = DB::table('roles') -> get();
        //return $rol;
        return view($this->path.'.index',compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rolesRequest $request)
    {
        try {
                $role = new Rol();
               /*$this->validate($request,[
                'nombre_rol' => 'required|max:100',
                'desc_rol'=>'required|max:100',
                ]);
*/              
               $role->nombre_rol = $request->nombre_rol;
               $role->descripcion_rol = $request->desc_rol;
               $role->save();
               $notification= array('mensaje3'=>'Guardado correctamente!','alert-type'=>'success');
                return redirect()->route('roles.index')->with($notification);
               //return $rol;
               return redirect()->route('roles.index');
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
        $rol = Rol::findOrFail($id);
       // $rol->delete();
        //return 'esta es la '.$rol;

        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(rolesRequest $request, $id)
    {
        $rol_editar=Rol::findOrFail($id);
        $rol_editar->nombre_rol     = $request->nombre_rol;
        $rol_editar->descripcion_rol= $request->desc_rol;
        $rol_editar->save();
        $notification= array('mensaje3'=>'Guardado correctamente!','alert-type'=>'success');
        return redirect()->route('roles.index')->with($notification);
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
            $rolEliminar = Rol::findOrFail($id);
            $rolEliminar->delete(); 
            $notification = array('mensaje3' =>' Eliminado exitosamente !',
            'alert-type'=>'success');
            return redirect()->route('roles.index')->with($notification);
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}