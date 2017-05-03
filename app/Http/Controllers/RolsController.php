<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Rol;
//use Rols\index;

class RolsController extends Controller
{
    private $path = 'rols';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol= Rol::all();
      //  $rols = BD::table('rols') -> get();
        //return $rol;
        return view('rols.index',compact('rol'));
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
    public function store(Request $request)
    {
        try {
               $rol = new Rol();
               /*$this->validate($request,[
                'nombre_rol' => 'required|max:100',
                'desc_rol'=>'required|max:100',
                ]);
*/
               $rol->nombre_rol = $request->nombre_rol;
               $rol->descripcion_rol = $request->desc_rol;
               $rol->save();
               //return $rol;
               return redirect()->route('rols.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $rol = Rol::findOrFail($id);
       // $rol->delete();
        //return 'esta es la '.$rol;

        return view('rols.edit', compact('rol'));
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
        $rol_editar=Rol::findOrFail($id);
        $rol_editar->nombre_rol     = $request->nombre_rol;
        $rol_editar->descripcion_rol= $request->desc_rol;
        $rol_editar->save();
        return redirect()->route('rols.index');
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
            //return redirect()->route('rols.index');
            return redirect()->route('rols.index');
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }
}
