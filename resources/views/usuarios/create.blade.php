
@extends('layout.master')

@section('contenido') 
@parent
<div class="container">
  <div class="row">
   {{ Form::open(array('route' =>array('usuarios.store'), 'method' => 'POST'), array('role'=> 'form')) }}
    <div class="col-sm-2">
             <div class="form-group">
         <label for="exampleInputName2">Documento de identidad</label>
         <input type="text" class="form-control" id="exampleInputName2" placeholder="ingrese su doc CI" name="numero_identidad_usuario">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
         <label for="exampleInputName2">Tipo documento</label>

            <select name="tipo_doc_usuario">
      <option value='-1'>Seleccione</option>  

      @foreach ($tipoDocId as $tipoDoc)
        <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombre_tipo_doc_identidad}}</option>
    @endforeach 
    </select>
    </br>
    
        </div>
    </div>

  <div class="form-group">
    <label for="exampleInputName2">Expedido en:</label>
    
        <select name="expedido_usuario">
      <option value='-1'>Seleccione</option>  

      @foreach ($ciudad as $expedido)
        <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
    @endforeach 
    </select>
    </br>
    

    </div>



  <div class="form-group">
    <label for="exampleInputName2" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="exampleInputName2" name="apellido_usuario">
  </div>
   <div class="form-group">
    <label for="exampleInputName2" class="col-sm-2 control-label">Nombres</label>
    <div class="col-sm-10">
      <input type="text" name="nombre_usuario" class="form-control" id="exampleInputName2">
      @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
    </div>
  </div>
  <div class="col-xs-6 col-sm-6">
    <label for="inputBirthday" class="control-label">Fecha de Nacimiento</label>
      <input name='fecha_nac_usuario' type="date" class="form-control" id="birthday" value="<?php 
    if(isset($_SESSION["birthday_patient"])) {
        echo $_SESSION["birthday_patient"];
    }?>" required>
  </div>
  <p>datos de nacimiento</p>
  <div class="form-group">
    <label for="exampleInputName2">pais</label>
    <select name="pais_usuario">
    <option value='-1'>Seleccione</option>  

    @foreach ($pais as $paises)
      <option value="{{$paises->id}}">{{$paises->nombre_pais}}</option>
    @endforeach 
    </select>
    </br>
    
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Ciudad</label>
    
        <select name="ciudad_usuario">
      <option value='-1'>Seleccione</option>  

      @foreach ($ciudad as $expedido)
        <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
    @endforeach 
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">provincia</label>
    
        <select name="provincia_usuario">
      <option value='-1'>Seleccione</option>  

      @foreach ($provincia as $provincia)
        <option value="{{$provincia->id}}">{{$provincia->nombre_provincia}}</option>
    @endforeach 
    </select>
  </div>


<div class="form-group">
    <label for="exampleInputName2">Sexo</label>
    <input type="text" class= "form-control"  id="sexoUsuario"  name="sexo_usuario" list="Sexo">
    <datalist id="Sexo">
      <option value="Femenino">
      <option value="Masculino">
    </datalist>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Estado civil</label>
      <select name="estado_civil_usuario">
      <option value='-1'>Seleccione</option>  

      @foreach ($estado as $estado)
        <option value="{{$estado->id}}">{{$estado->estado_civil}}</option>
    @endforeach 
    </select>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Correo Electronico</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_usuario">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Re-escribir correo electronico</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputName2" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="exampleInputName2" name="telefono_usuario">
  </div>
<div class="form-group">
    <label for="exampleInputName2" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="exampleInputName2" name="celular_usuario">
  </div>

<div class="form-group">
    <label for="exampleInputName2">Direccion</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="ingrese lugar de domicilio" name="direcion_usuario">
  </div>
<div class="form-group">
    <label for="exampleInputName2">Barrio</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="ingrese lugar de domicilio" name="barrio_usuario">
  </div>

{{ Form::button('Crear Nuevo Usuario', array('type'=> 'submit')) }}

  {{ Form::close() }}
  </div>
</div>
      <p>esta es mi seccion de contenido inicio</p>

@endsection