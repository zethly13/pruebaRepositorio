

@extends('layout.master')
@section('contenido') 

 <div class="panel panel-default">  
  <div class="panel-heading "><center>INFORMACION BIOGRAFICA DE USUARIO</center></div>
    <div class="panel-body">
      <div class="container-fluid">
        <div class="col-md-4 text-center">
          <img src="/img/perfil.jpg" class="img-thumbnail img-responsive img-raised" width="200" height="130">
         </div>

         <div class="col-md-8">
          <table class="table table-condensed table-bordered">
            <tbody>
              <tr>
                <th class="info"  WIDTH="210">CI</th>
                <td>{{ $usuario->doc_identidad }}</td>
              </tr>
              <tr>
                <th class="info">TIPO DE DOCUMENTO:</th>
                <td>{{ $usuarioInfo->nombre_tipo_doc_identidad }}</td>
              </tr>
              <tr>
                <th class="info">DOCUMENTO EXPEDIDO EN:</th>
                <td>{{ $usuarioInfo->nombre_ciudad }}</td>
              </tr>
              <tr>
                <th class="info">NOMBRE:</th>
                <td>{{ $usuario->nombres }}</td>
              </tr>
              <tr>
                <th class="info">APELLIDOS</th>
                <td>{{ $usuario->apellidos }}</td>
              </tr>
               <tr>
                <th class="info">FECHA DE NACIMIENTO:</th>
                <td>{{ $usuario->fecha_nac }}</td>
              </tr>
              <tr>
                <th class="info">PAIS NACIMIENTO:</th>
                <td>{{ $usuarioPais->nombre_pais }}</td>
              </tr>
              <tr>
                <th class="info">CIUDAD DE NACIMIENTO:</th>
                <td>{{ $usuarioInfo->nombre_ciudad }}</td>
              </tr>
              <tr>
                <th class="info">PROVINCIA NACIMIENTO:</th>
                <td>{{ $usuarioInfo->nombre_provincia }}</td>
              </tr>
              <tr>
                <th class="info">GENERO:</th>
                <td>{{ $usuario->sexo }}</td>
              </tr>
              <tr>
                <th class="info">ESTADO CIVIL:</th>
                <td>{{ $usuarioInfo->estado_civil }}</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->

<div class="panel panel-default">  
<div class="panel-heading "><center>CORREO USUARIO</center></div>
  <div class="panel-body">
    <div class="container-fluid">
      <table class="table table-condensed table-bordered">
        <thead>
            <th class="text-center info">TIPO DE CORREO</th>
            <th class="text-center info">CORREO ELECTRONICO</th>
            <th class="text-center info">ACTIVO</th>
            <th class="text-center info">DEFECTO</th>
            <th class="text-center info">MODIFICAR</th>
            <th class="text-center info">ELIMINAR</th>
        </thead>
        <tbody>
          <tr>
            <td class="text-uppercase">
              @if(!is_null($usuarioEmail))  
                {{ $usuarioEmail->nombre_tipo_email }}
              @else
                <h4>SIN TIPO CORREO</h4>
              @endif 
            </td>
            <td  class="text-uppercase">
              @if(!is_null($usuarioEmail)) 
                {{ $usuarioEmail->email }}
              @else
                <h4>USUARIO SIN CORREO</h4>
              @endif
            </td>  
            <td></td>
            <td></td>
            <td class="text-center"><button  href=""  class="btn btn-success glyphicon glyphicon-edit"> Modificar</button></td>
            <td class="text-center"><a href="" type="button" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary glyphicon glyphicon-plus">  NUEVO CORREO ELECTRONICO</button>
    </div>
  </div><!--cierre panel body-->
</div><!--cierre panel default-->


<div class="panel panel-default">  
<div class="panel-heading "><center>DIRECCION USUARIO</center></div>
  <div class="panel-body">
    <div class="container-fluid">
      <table class="table table-condensed table-bordered">
        <thead>
            <th class="text-center info">TIPO DE DIRECCIÓN</th>
            <th class="text-center info">DIRECCIÓN</th>
            <th class="text-center info">MODIFICAR</th>
            <th class="text-center info">ELIMINAR</th>
        </thead>
        <tbody>
          <tr>
            <td class=" text-uppercase">
              @if(!is_null($usuarioDir))
                {{ $usuarioDir->nombre_tipo_direccion }}
              @else
                <h4>sin tipo Direccion</h4>
              @endif 
            </td>
            <td class="text-uppercase">
              @if(!is_null($usuarioDir))
                {{ $usuarioDir->nombre_direccion }}   
              @else
                <h4>Usuario sin direccion</h4>
              @endif
            </td>  
            <td class="text-center"><a href="" type="button" class="btn btn-success glyphicon glyphicon-edit"> Modificar</a></td>
            <td class="text-center"><a href="" type="button" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
          </tr>
        </tbody>
      </table>
      <a  href="#nueva_direccion" class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal">  NUEVA DIRECCION</a>
    </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->


<div class="panel panel-default">  
<div class="panel-heading "><center>TELEFONO USUARIO</center></div>
<div class="panel-body">
  <div class="container-fluid">
    <table class="table table-condensed table-bordered">
        <thead>
            <th class="text-center info">TIPO DE TELEFONO:</th>
            <th class="text-center info">TELEFONO</th>
            <th class="text-center info">MODIFICAR</th>
            <th class="text-center info">ELIMINAR</th>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">
              @if(!is_null($usuarioTelf))
                {{ $usuarioTelf->nombre_tipo_telefono }} 
              @else
                <h4>SIN TIPO TELEFONO</h4>
              @endif  
            </td>
            <td class="text-center" width="300">
              @if(!is_null($usuarioTelf))
                {{ $usuarioTelf->numero_telefono }}   
              @else
                <h4>USUARIO SIN TELEFONO</h4>
              @endif
            </td>  
            <td class="text-center"><a href="" type="button" class="btn btn-success glyphicon glyphicon-edit"> Modificar</a></td>
            <td class="text-center"><a href="" type="button" class="btn btn-danger glyphicon glyphicon-trash"> Eliminar</a></td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary glyphicon glyphicon-plus">  NUEVO TELEFONO</button>
     </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->



@endsection