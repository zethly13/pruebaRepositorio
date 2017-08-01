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
use App\Usuario_direccion;
use App\usuario_email;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsuariosController extends Controller
{
    use AuthenticatesUsers;
    
    private $path = 'usuarios';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('autentificado', [
            'except' => ['login', 'logear']
            ]);

    }

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
               $user->clave =bcrypt($request->numero_identidad_usuario);
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
               return redirect()->route($this->path.'.index')->with('mensaje','se registro el usuario');
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
        $user=Usuario::join('estado_civiles','estado_civiles.id','=','usuarios.id_estado_civil')->join('tipo_doc_identidades','tipo_doc_identidades.id','=','usuarios.id_tipo_doc_identidad')->join('provincias','provincias.id','=','usuarios.id_provincia')->join('ciudades','ciudades.id','=','usuarios.ciudad_expedido_doc')->select('usuarios.id','usuarios.nombres','usuarios.apellidos','doc_identidad','tipo_doc_identidades.nombre_tipo_doc_identidad','usuarios.id_tipo_doc_identidad','provincias.nombre_provincia', 'usuarios.id_provincia','usuarios.ciudad_expedido_doc','ciudades.nombre_ciudad', 'usuarios.fecha_nac', 'usuarios.id_estado_civil','estado_civiles.estado_civil', 'usuarios.sexo')->where('usuarios.id','=',$id)->get()->first();
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
        $user=Usuario::where('usuarios.id',$id)->get()->first();
        $user->doc_identidad = $request->numero_identidad_usuario;
        $user->login = $request->numero_identidad_usuario;
        $user->clave = bcrypt($request->numero_identidad_usuario);
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
            $user = Usuario::where('usuarios.id',$id)->get()->first();
            //return $user;
            $user->delete(); 
            //return redirect()->route('rols.index');
            return redirect()->route($this->path.'.index');
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }

    //Parte de Autenticacion
    public function login()
    {
        return view('usuarios.login');
    }

    public function logear(Request $request)
    {
        $credenciales = $request->only([
            'login', 'password'
            ]);
        //return $credenciales;
        if(auth()->attempt($credenciales))
            return redirect()
                ->route('usuarios.index');
        else return redirect()
                ->route('usuarios.login')
                ->withErrors([
                    'login' => 'Usuario o contraseña incorrectos'
                    ])
                ->withInput([
                    'username' => $request->input('username'),
                    ]);                
       
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('usuarios.login');
    }

    public function perfil()
    {
        $usuario = auth()->user();
        //return 'php artisan route:list';
        return $usuario;
        //return view('usuarios.perfil', compact('usuario'));
    }   
}
