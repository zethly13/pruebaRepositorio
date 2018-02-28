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
use App\Usuario_email;
use App\Usuario_telefono;
use App\Tipo_email;
use App\Tipo_telefono;
use App\Tipo_direccion;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;//tati para contraseña
use Illuminate\Support\Facades\Input;//tati contraseña
use Illuminate\Support\Facades\Redirect;//tati contraseña
Use Laracasts\Flash\Flash;//mensajes  tati
use Validator; 
use Response;
use App\Http\Requests\usuarioRequest;
use Illuminate\Http\Requests;

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
        $tipo_email=Tipo_email::all()->pluck('nombre_tipo_email','id');
        $tipo_telefono=Tipo_telefono::all()->pluck('nombre_tipo_telefono', 'id');
        $tipo_direccion=Tipo_direccion::all()->pluck('nombre_tipo_direccion', 'id');    

        return view($this->path.'.create', compact('pais','tipoDocId','ciudad','provincia','estado','tipo_email','tipo_telefono','tipo_direccion'));
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
                
               $usuario_email = new Usuario_email();
               $usuario_email->email = $request->email_usuario;
               $usuario_email->email_activo ='SI';
               $usuario_email->id_usuario = $user->doc_identidad;
               $usuario_email->id_tipo_email= $request->tipo_email;
               $usuario_email->save();

                $usuario_telefono = new Usuario_telefono();
                $usuario_telefono->numero_telefono = $request->telefono_usuario;
                $usuario_telefono->id_usuario = $user->doc_identidad;
                $usuario_telefono->id_tipo_telefono= $request->tipo_telefono;
                $usuario_telefono->save();

                $usuario_direccion = new Usuario_direccion();
                $usuario_direccion->nombre_direccion = $request->direccion_usuario;
                $usuario_direccion->id_usuario = $user->doc_identidad;
                $usuario_direccion->id_tipo_direccion= $request->tipo_direccion;
                $usuario_direccion->save();

               return redirect()->route($this->path.'.index')->with('mensaje','se registro el usuario');
           } catch (Exception $e) {
               return "Fatal Error -".$e->getMessage();
           }     
    }

     public function show($id)
    {
        
       $usuario=Usuario::where('usuarios.id','=',$id)->get()->first();

       $usuarioEmail=Usuario_email::join('tipo_emails','tipo_emails.id','=','usuario_emails.id_tipo_email')->select('tipo_emails.nombre_tipo_email','usuario_emails.email','usuario_emails.email_activo','usuario_emails.id','tipo_emails.id as id_tipo_email')->where('usuario_emails.id_usuario',$id)->get();

       $usuarioTelf=Usuario_telefono::join('tipo_telefonos','tipo_telefonos.id','=','usuario_telefonos.id_tipo_telefono')->select('tipo_telefonos.nombre_tipo_telefono', 'usuario_telefonos.numero_telefono','usuario_telefonos.id', 'tipo_telefonos.id as id_tipo_telefono')->where('usuario_telefonos.id_usuario','=',$id)->get();

       $usuarioDir=Usuario_direccion::join('tipo_direcciones','tipo_direcciones.id','=','Usuario_direcciones.id_tipo_direccion')->select('tipo_direcciones.nombre_tipo_direccion','Usuario_direcciones.nombre_direccion','usuario_direcciones.id','tipo_direcciones.id as id_tipo_direccion')->where('Usuario_direcciones.id_usuario','=',$id)->get();
       $tipo_email=Tipo_email::all()->pluck('nombre_tipo_email','id');
       $tipo_telefono=Tipo_telefono::all()->pluck('nombre_tipo_telefono', 'id');
       $tipo_direccion=Tipo_direccion::all()->pluck('nombre_tipo_direccion', 'id'); 

        return view('usuarios.editarPerfil', compact('usuario','usuarioEmail','usuarioTelf','usuarioDir','tipo_email','tipo_direccion','tipo_telefono','modificarEmail'));
    } 

    public function addEmail(Request $request, $id){

               $usuario_email = new Usuario_email();
               $usuario_email->email = $request->email_usuario;
               $usuario_email->email_activo ='SI';
               $usuario_email->id_usuario = $id;
               $usuario_email->id_tipo_email= $request->tipo_email;
               $usuario_email->save();
               return redirect::back();
    }

    public function addTelefono(Request $request, $id){

               
                $usuario_telefono = new Usuario_telefono();
                $usuario_telefono->numero_telefono = $request->telefono_usuario;
                $usuario_telefono->id_usuario = $id;
                $usuario_telefono->id_tipo_telefono= $request->tipo_telefono;
                $usuario_telefono->save();
                return redirect::back();
    }
   
    public function addDireccion(Request $request, $id){

                $usuario_direccion = new Usuario_direccion();
                $usuario_direccion->nombre_direccion = $request->direccion_usuario;
                $usuario_direccion->id_usuario = $id;
                $usuario_direccion->id_tipo_direccion= $request->tipo_direccion;
                $usuario_direccion->save();
                return redirect::back();
    }

    public function eliminarEmail($id)

    {
       try {

            $email = Usuario_email::where('id',$id)->get()->first();
            $email->delete();
                 flash()->success('Email ha sido eliminado'); 
            return redirect()->back();
           
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }   
    }

    public function eliminarTelefono($id)

    {
       try {

            $telefono = Usuario_telefono::where('id',$id)->get()->first();
            $telefono->delete();
                 flash()->success('Telefono ha sido eliminado'); 
            return redirect()->back();
           
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }  
    }

    public function eliminarDireccion($id)

    {
       try {

            $direccion = Usuario_direccion::where('id',$id)->get()->first();
            $direccion->delete();
                 flash()->success('Direccion ha sido eliminado'); 
            return redirect()->back();
           
        } catch (Exception $e) {
            return "Fatal Error - ".$e->getMessage();
        }
    }

    public function modificarEmail(Request $request, $id)
    {
               $usuario_email = Usuario_email::where('id',$id)->get()->first();
               $usuario_email->email = $request->email_usuario;
               $usuario_email->email_activo ='SI';
               $usuario_email->id_tipo_email= $request->tipo_email;
               $usuario_email->save();
               return redirect::back();
    }

    public function modificarTelefono(Request $request, $id)
    {
                $usuario_telefono = Usuario_telefono::where('id',$id)->get()->first();
                $usuario_telefono->numero_telefono = $request->telefono_usuario;
                $usuario_telefono->id_tipo_telefono= $request->tipo_telefono;
                $usuario_telefono->save();
                return redirect::back();
    }

    public function modificarDireccion(Request $request, $id)
    {
                $usuario_direccion = Usuario_direccion::where('id',$id)->get()->first();
                $usuario_direccion->nombre_direccion = $request->direccion_usuario;
                $usuario_direccion->id_tipo_direccion= $request->tipo_direccion;
                $usuario_direccion->save();
                return redirect::back();
    }

    public function edit($id)
    {
        $usuario=Usuario::where('usuarios.id','=',$id)->get()->first();
        $pais=Pais::all();
        $tipoDocId=Tipo_doc_identidad::pluck('nombre_tipo_doc_identidad','id');
        $ciudad=Ciudad::all();
        $provincia=Provincia::all();
        $estado=Estado_civil::all();
        $usuario_email=Usuario::join('usuario_emails','usuario_emails.id_usuario','=','usuarios.id')->join('tipo_emails','tipo_emails.id','=','usuario_emails.id_tipo_email')->select('id_usuario','email','id_tipo_email','nombre_tipo_email')->where('usuarios.id','=',$id)->get();
       $usuario_telefono=Usuario::join('usuario_telefonos','usuario_telefonos.id_usuario','=','usuarios.id')->join('tipo_telefonos','tipo_telefonos.id','=','usuario_telefonos.id_tipo_telefono')->select('id_usuario','numero_telefono','id_tipo_telefono','nombre_tipo_telefono')->where('usuarios.id','=',$id)->get();
        
       $usuario_direccion=Usuario::join('usuario_direcciones','usuario_direcciones.id_usuario','=','usuarios.id')->join('tipo_direcciones','tipo_direcciones.id','=','usuario_direcciones.id_tipo_direccion')->select('id_usuario','nombre_direccion','id_tipo_direccion','nombre_tipo_direccion','usuario_direcciones.id')->where('usuarios.id','=',$id)->get();

        return view($this->path.'.editarUsuario', compact('usuario','tipo_direccion','usuario_telefono','usuario_direccion','usuario_email','pais','tipoDocId','ciudad','provincia','estado','user'));    
    }
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
      
    public function login()
    {
        return view('usuarios.login');
    }

    public function logear(Request $request)
    {
        $credenciales = $request->only([
            'login', 'password'
            ]);
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
       $usuario=Usuario::where('usuarios.id','=',auth()->user()->id)->get()->first();

       $usuarioEmail=Usuario_email::join('tipo_emails','tipo_emails.id','=','usuario_emails.id_tipo_email')->select('tipo_emails.nombre_tipo_email','usuario_emails.email','usuario_emails.email_activo','usuario_emails.id','tipo_emails.id as id_tipo_email')->where('usuario_emails.id_usuario','=',auth()->user()->id)->get();

       $usuarioTelf=Usuario_telefono::join('tipo_telefonos','tipo_telefonos.id','=','usuario_telefonos.id_tipo_telefono')->select('tipo_telefonos.nombre_tipo_telefono', 'usuario_telefonos.numero_telefono','usuario_telefonos.id', 'tipo_telefonos.id as id_tipo_telefono')->where('usuario_telefonos.id_usuario','=',auth()->user()->id)->get();

       $usuarioDir=Usuario_direccion::join('tipo_direcciones','tipo_direcciones.id','=','Usuario_direcciones.id_tipo_direccion')->select('tipo_direcciones.nombre_tipo_direccion','Usuario_direcciones.nombre_direccion','usuario_direcciones.id','tipo_direcciones.id as id_tipo_direccion')->where('Usuario_direcciones.id_usuario','=',auth()->user()->id)->get();
        $tipo_email=Tipo_email::all()->pluck('nombre_tipo_email','id');
       $tipo_telefono=Tipo_telefono::all()->pluck('nombre_tipo_telefono', 'id');
       $tipo_direccion=Tipo_direccion::all()->pluck('nombre_tipo_direccion', 'id'); 
        
      return view('usuarios.perfil', compact('usuario','usuarioEmail','usuarioTelf','usuarioDir','tipo_email','tipo_telefono','tipo_direccion'));
       
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
