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

use Hash;//tati para contraseña
use Illuminate\Support\Facades\Input;//tati contraseña
use Illuminate\Support\Facades\Redirect;//tati contraseña
Use Laracasts\Flash\Flash;//mensajes  tati
use Validator; 

class UsuariosController extends Controller
{
    use AuthenticatesUsers;
    
    private $path = 'usuarios';
    
    public function __construct()
    {

        $this->middleware('autentificado', [
            'except' => ['login', 'logear']
            ]);
        $this->middleware('permisos:1', ['only' => 'create','store']);
        $this->middleware('permisos:2', ['only' => 'edit','destroy','update']);
        $this->middleware('permisos:1,2',['only' => 'index']);
}
    public function index(Request $request)
    {
        $usuario=Usuario::Buscador($request->nombre)->paginate(20);
        $usuario->each(function($usuario){
            $usuario->tipo_doc_identidad;
            $usuario->ciudad;
            $usuario->estado_civil;
            $usuario->provincia;
        });
        
        return view($this->path.'.listaUsuarios', compact('usuario'));
    }

    
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
       try{
          $user = Usuario::where('usuarios.id',$id)->get()->first();
          if(Auth::user()->id!== $user->id)
            {
              $user->delete();
              $notification = array('mensaje3' =>' Eliminado exitosamente !','alert-type'=>'success');
              return redirect()->back()->with($notification);
            }
          else
            {
              $notification = array('mensaje3' =>'no puede eliminarse a si mismo','alert-type'=>'warning');
              return redirect()->back()->with($notification);
            }
          }
        catch (Exception $e){
    }   
    }
        /*
        if ( Auth::user()->id == $id ) {
        flash()->warning('Deletion of currently logged in user is not allowed :(')->important();
        return redirect()->back();
    }

    if( User::findOrFail($id)->delete() ) {
        flash()->success('User has been deleted');
    } else {
        flash()->success('User not deleted');
    }
        */

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
                ->route('home.index');
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
    public function home()
    {
        return view('home');
    }

    public function perfil()
    {
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

    public function loginModificar()
    {
        $usuario=Auth::user();  
        return view($this->path.'.loginModificar',compact('usuario'));
    }
    public function validarModLogin(Request $request,$id)
    {

      $this->validate($request,[
            'nuevo_login'=>['required','max:15','min:5']
        ]);

      $usuario=Auth::User();
      if(Auth::user()->login==$request->nuevo_login)
        {
        //Flash::error('misma contraseña');
        return redirect()->route($this->path.'.loginModificar')->with('mensaje', 'usted a ingresado su mismo login.');
        }
      else
        {
        $usuario->login = $request->nuevo_login;
        $usuario->save();
        $notification = array('mensaje3' =>'Login guardado correctamente !',
            'alert-type'=>'success'
         );
        return back()->with($notification);
        //return redirect()->route($this->path.'.loginModificar')->with('mensaje2', '   Nuevo login guardado correctamente.');
        }
    }

    public function contrasenaModificar()
    {
      $usuario=Auth::user();
      return view($this->path.'.contrasenaModificar',compact('usuario'));
        
    }
    public function validarModContrasena(Request $request,$id)
    {
      $rules = array(
            'contrasena' => 'required',
            'nueva_contrasena' => 'required|min:5',
            'reescribir_contrasena' => 'required|same:nueva_contrasena');
      $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.');
      $validation = \Validator::make(Input::all(), $rules, $messages);
      if ($validation->fails())
        {
          return redirect()->route($this->path.'.contrasenaModificar')->withErrors($validation)->withInput();
        }
      else
        {
          if (Hash::check(Input::get('contrasena'), Auth::user()->clave))
            {
              $usuario = Auth::user();
              $usuario->clave = Hash::make(Input::get('nueva_contrasena'));
              $usuario->save();  
              if($usuario->save())
                {
                return redirect()->route($this->path.'.contrasenaModificar')->with('mensaje2', '  Nueva contraseña guardada correctamente');
                        //return redirect()->route($this->path.'.index');
                }
              else
                {
                return redirect()->route($this->path.'.contrasenaModificar')->with('mensaje', 'No se ha podido guardar la nueva contaseña');
                }
            }
          else
            {
            return redirect()->route($this->path.'.contrasenaModificar')->with('mensaje', 'La contraseña actual no es correcta')->withInput();
            }
        }
    }
}
