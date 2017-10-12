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
use Auth;
use App\Usuario_telefono;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Response;

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

    public function index(Request $request)
    {
        $usuario=Usuario::Buscador($request->nombre)->paginate();
        $usuario->each(function($usuario){
            $usuario->tipo_doc_identidad;
            $usuario->ciudad;
            $usuario->estado_civil;
            $usuario->provincia;
        });
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

 public function getCiudades($id){

            $response = null;
            $ciudad = Pais::find($id)->ciudades->pluck('nombre_ciudad','id');
            return $response = Response::json($ciudad);
    }

    public function getProvincias($id){
            
            $response = null;
            $provincias = Ciudad::find($id)->provincias->pluck('nombre_provincia','id');
            return $response = Response::json($provincias);    
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
       //$tipoDoc = auth()->user()->id_tipo_doc_identidad;
        //$usuarioTipo = Tipo_doc_identidad::where('id','=',auth()->user()->id_tipo_doc_identidad)->select('nombre_tipo_doc_identidad')->get()->first();
      
       $usuario=auth()->user();
       $usuarioInfo=Usuario::join('tipo_doc_identidades','tipo_doc_identidades.id','=','usuarios.id_tipo_doc_identidad')->join('estado_civiles','estado_civiles.id','=','usuarios.id_estado_civil')->join('provincias','provincias.id','=','usuarios.id_provincia')->join('ciudades','ciudades.id','=','usuarios.ciudad_expedido_doc')->select('tipo_doc_identidades.nombre_tipo_doc_identidad','estado_civiles.estado_civil','provincias.nombre_provincia','ciudades.nombre_ciudad')->where('usuarios.id','=',auth()->user()->id)->get()->first();

       $usuarioPais=Ciudad::join('paises','paises.id','=','ciudades.id_pais')->select('paises.nombre_pais')->where('ciudades.id','=',auth()->user()->ciudad_expedido_doc)->get()->first();

       $usuarioEmail=Usuario_email::join('tipo_emails','tipo_emails.id','=','usuario_emails.id_tipo_email')->select('tipo_emails.nombre_tipo_email','usuario_emails.email')->where('usuario_emails.id_usuario','=',auth()->user()->id)->get()->first();
       
       //$usuarioEmail=2;
       $usuarioTelf=Usuario_telefono::join('tipo_telefonos','tipo_telefonos.id','=','usuario_telefonos.id_tipo_telefono')->select('tipo_telefonos.nombre_tipo_telefono', 'usuario_telefonos.numero_telefono')->where('usuario_telefonos.id_usuario','=',auth()->user()->id)->get()->first();

       $usuarioDir=Usuario_direccion::join('tipo_direcciones','tipo_direcciones.id','=','Usuario_direcciones.id_tipo_direccion')->select('tipo_direcciones.nombre_tipo_direccion','Usuario_direcciones.nombre_direccion')->where('Usuario_direcciones.id_usuario','=',auth()->user()->id)->get()->first();

        //$usuario=Usuario::where('id','=',auth()->user());
        //return $usuarioDir;
      return view('usuarios.perfil', compact('usuario','usuarioInfo','usuarioPais','usuarioEmail','usuarioTelf','usuarioDir'));
       
        //return view('usuarios.perfil')->with('usuario',$usuario);
    }
<<<<<<< HEAD
    //funcion que recupera accesos de subRoles
    public function subRolesAsignadosMenu($id)
    {
        //$consulta = "select a.nom_app,tp.descrip, a.id_app from usuario u,user_rol ur,rol r,app a,rol_app ra,tipo_app tp where u.id_usuario=ur.id_usuario and r.id_rol=ur.id_rol and r.id_rol=ra.id_rol and ra.id_app=a.id_app and a.id_tip_app=tp.id_tip_app and u.id_usuario='$usuario' order by a.id_app asc";
        $subAcceso=Usuario_asignar_sub_rol::join('usuarios','usuarios.id','=','usuario_asignar_sub_roles.id_usuario')->join('usuario_asignar_sub_roles','usuario_asignar_sub_roles.id_sub_rol','=','sub_roles.id')->join('sub_roles','sub_roles.id','=','acceso_sub_roles.id_sub_rol')->join('acceso_sub_roles','acceso_sub_roles.id_sub_acceso','=','sub_accesos.id')->where('usuarios.id',$id)->get();
        return $subAcceso;
=======

    public function loginModificar()
    {
         $usuario=Auth::user();  
        return view($this->path.'.loginModificar',compact('usuario'));
        //return $usuario;
    }
    public function validarModLogin(Request $request,$id)
    {

      $usuario=Auth::User();
      if(Auth::user()->login==$request->nuevo_login)
        return "mismo login";
      else
        $usuario->login = $request->nuevo_login;
        $usuario->save();   
        return redirect()->route($this->path.'.index');
        
        //return "es diferente login";
    }

    public function contrasenaModificar()
    {
      $usuario=Auth::user();
        
    }
    public function ValidarModContrasena()
    {


            
           // $modActivo->activo = $request->;
            //$modActivo->save();
>>>>>>> e24dc089c55e348df818a7c8723ca9973d497598
    }
}
