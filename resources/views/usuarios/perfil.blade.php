@extends('layout.master')
@section('contenido') 

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>INFORMACION BIOGRAFICA DE USUARIO</strong></div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="/img/img_avatar3.png" class="img-thumbnail img-responsive img-raised" width="220" height="150">
      </div> 
      <div class="col-md-8">
        <table class="table table-sm table-hover table-condensed table-bordered">
          <tbody>
            <tr>
              <th class="table-info"  WIDTH="255">CI</th>
              <td>{{ $usuario->doc_identidad }}</td>
            </tr>
            <tr>
              <th class="table-info">TIPO DE DOCUMENTO:</th>
              <td class="text-uppercase">{{ $usuarioInfo->nombre_tipo_doc_identidad }}</td>
            </tr>
            <tr>
              <th class="table-info">DOCUMENTO EXPEDIDO EN:</th>
              <td class="text-uppercase">{{ $usuarioInfo->nombre_ciudad }}</td>
            </tr>
            <tr>
              <th class="table-info">NOMBRE:</th>
              <td class="text-uppercase">{{ $usuario->nombres }}</td>
            </tr>
            <tr>
              <th class="table-info">APELLIDOS</th>
              <td class="text-uppercase">{{ $usuario->apellidos }}</td>
            </tr>
            <tr>
              <th class="table-info">FECHA DE NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuario->fecha_nac }}</td>
            </tr>
            <tr>
              <th class="table-info">PAIS NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuarioPais->nombre_pais }}</td>
            </tr>
            <tr>
              <th class="table-info">CIUDAD DE NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuarioInfo->nombre_ciudad }}</td>
            </tr>
            <tr>
              <th class="table-info">PROVINCIA NACIMIENTO:</th>
              <td class="text-uppercase">{{ $usuarioInfo->nombre_provincia }}</td>
            </tr>
            <tr>
              <th class="table-info">GENERO:</th>
              <td class="text-uppercase">{{ $usuario->sexo }}</td>
            </tr>
            <tr>
              <th class="table-info">ESTADO CIVIL:</th>
              <td class="text-uppercase">{{ $usuarioInfo->estado_civil }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>CORREO USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-lg">
      <thead>
        <tr class="text-center table-info">
          <th>TIPO DE CORREO</th>
          <th>CORREO ELECTRONICO</th>
          <th>ACTIVO</th>
          <th>DEFECTO</th>
          <th>MODIFICAR</th>
          <th>ELIMINAR</th>
        </tr>
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
          <td class="text-center"><a class="btn btn-success" href="#"><i class="fa fa-pencil"></i> Modificar</a></td>
          <td class="text-center"><a class="btn btn-danger" href="#"><i class="fa fa-trash"></i> Eliminar</a></td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-primary" href="#"><i class="fa fa-plus fa-fw"></i> NUEVO CORREO ELECTRONICO</a>
  </div><!--cierre panel body-->
</div><!--cierre panel card-->


<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>DIRECCION DE USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-md">
      <thead>
        <tr class="text-center table-info">
          <th>TIPO DE DIRECCIÓN</th>
          <th>DIRECCIÓN</th>
          <th>MODIFICAR</th>
          <th>ELIMINAR</th>
        </tr>
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
          <td class="text-center"><a class="btn btn-success" href="#"><i class="fa fa-pencil"></i> Modificar</a></td>
          <td class="text-center"><a class="btn btn-danger" href="#"><i class="fa fa-trash"></i> Eliminar</a></td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-primary" href="#"><i class="fa fa-plus fa-fw"></i> NUEVA DIRECCION</a>
  </div><!--cierre panel body-->
</div><!--cierre panel card-->

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>TELEFONO USUARIO</strong></div>
  <div class="card-body">
    <table class="table table-condensed table-bordered table-responsive-md">
      <thead>
        <th class="text-center table-info">TIPO DE TELEFONO:</th>
        <th class="text-center table-info">TELEFONO</th>
        <th class="text-center table-info">MODIFICAR</th>
        <th class="text-center table-info">ELIMINAR</th>
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
          <td class="text-center"><a class="btn btn-success" href="#"><i class="fa fa-pencil"></i> Modificar</a></td>
          <td class="text-center"><a class="btn btn-danger" href="#"><i class="fa fa-trash"></i> Eliminar</a></td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-primary" href="#"><i class="fa fa-plus fa-fw"></i> NUEVO TELEFONO</a>
  </div><!--cierre panel body-->
</div><!--cierre card-->
@endsection