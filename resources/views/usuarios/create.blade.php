
@extends('layout.master')
@section('contenido')

            <div class="row">  
 {{ Form::open(array('route' =>array('usuarios.store'), 'method' => 'POST', 'class'=>'form-horizontal'), array('role'=> 'form')) }}
<!--inicio de mi formulario-->

<!--Documento de indentidad-->
    {{ Form::label('numero_Identidad_usuario','Documento de indentidad')}}
    {{ Form::text('numero_Identidad_usuario',null,array('placeholder' => 'ingrese su doc CI')) }}
    {{ Form::label('tipo_doc_usuario','Tipo documento') }}
    <select name="tipo_doc_usuario">
      <option value='-1'>Seleccione</option>  
         @foreach ($tipoDocId as $tipoDoc)
            <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombre_tipo_doc_identidad}}</option>
         @endforeach 
    </select>
    {{ Form::label('expedido_usuario','Expedido en:') }}
        <select name="expedido_usuario">
          <option value='-1'>Seleccione</option>
             @foreach ($ciudad as $expedido)
               <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
              @endforeach 
        </select>
        
                    <hr class="star-primary">
<!--nomnre apellido y fecha-->
    {{ Form::label('apellido_usuario','Apellidos') }}
    {{ Form::text('apellido_usuario',null,array('placeholder' => 'ingrese apellido','class'=>'form-control')) }}

    {{ Form::label('nombre_usuario','Nombres') }}
    {{ Form::text('nombre_usuario',null,array('placeholder' => 'ingrese Nombre','class'=>'form-control')) }}
      @if ($errors->has('name'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

   {{ Form::label('fecha_nac_usuario','Fecha de nacimiento') }}
      <input name='birthday' type="date" class="form-control" id="birthday" value="<?php 
         if(isset($_SESSION["birthday_patient"])) {
             echo $_SESSION["birthday_patient"];
           }?>" required>


<!--datos nacimiento-->
  <p>datos de nacimiento</p>
    {{ Form::label('pais_usuario','Pais:') }}
    <select class="form-control" name="pais_usuario">
    <option value='-1'>Seleccione</option>  
       @foreach ($pais as $paises)
          <option value="{{$paises->id}}">{{$paises->nombre_pais}}</option>
        @endforeach 
    </select>

    {{ Form::label('cuidad_usuario','Ciudad:') }}
      <select class="form-control" name="ciudad">
      <option value='-1'>Seleccione</option>  

      @foreach ($ciudad as $expedido)
        <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
       @endforeach 
    </select>

     {{ Form::label('provincia_usuario','Provincia:') }}
     <select  class="form-control" name="provincia">
      <option value='-1'>Seleccione</option>  
        @foreach ($provincia as $provincia)
         <option value="{{$provincia->id}}">{{$provincia->nombre_provincia}}</option>
        @endforeach 
     </select>
<!--genero y esetado civil-->


     {{ Form::label('sexo_usuario','Genero:') }}
    <input type="text" class= "form-control"  id="exampleInputName2" name="sexo_usuario" list="Sexo">
    <datalist id="Sexo">
      <option value="femenino">
      <option value="masculino">
    </datalist>

     {{ Form::label('estado_civil_usuario','Estado civil:') }}
      <select name="estado_civil_usuario">
      <option value='-1'>Seleccione</option>  
      @foreach ($estado as $estado)
        <option value="{{$estado->id}}">{{$estado->estado_civil}}</option>
       @endforeach 
      </select>




     {{ Form::label('email_usuario','Correo electronico:') }}
      {{ Form::email('email_usuario',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) }}


     {{ Form::label('email_usuario','Re-escribir Correo electronico:') }}
      {{ Form::email('email_usuario',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) }}
    
    
      {{ Form::label('telefono_usuario','Telefono:') }}
      {{ Form::text('telefono_usuario',null,array('placeholder' => 'ingrese su Telefono','class'=>'form-control')) }}
  
      {{ Form::label('celular_usuario','Celular:') }}
      {{ Form::text('celular_usuario',null,array('placeholder' => 'ingrese su celular','class'=>'form-control')) }}

       {{ Form::label('direcion_usuario','Direccion') }}
       {{ Form::text('direcion_usuario',null,array('placeholder' => 'ingrese direccion','class'=>'form-control')) }}

{{ Form::button('Crear Nuevo Usuario', array('type'=> 'submit','class'=>'btn btn-primary'))}}

    {{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}

  {{ Form::close() }}

@endsection