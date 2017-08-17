
@extends('layout.master')
@section('contenido')
<p>todos los campos es asterisco son de manera obligatoria</p>
<div class="panel panel-default">  
  <div class="panel-heading "><center>FORMULARIO DE REGISTRO</div>
    <div class="panel-body"> 
    {!! Form::open(array('route' =>array('usuarios.store'), 'method' => 'POST'), array('role'=> 'form')) !!}
      <!--inicio de mi formulario-->
       
        <div class="form-group col-md-4">
          {!! Form::label('numero_identidad_usuario','* Documento de indentidad:')!!}
          {!! Form::text('numero_identidad_usuario',null,array('placeholder' => 'Ingrese su doc CI', 'class'=>'form-control')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('tipo_doc_usuario','* Tipo documento:') !!}
          {!! Form::select('tipo_doc_usuario',$tipoDocId->pluck('nombre_tipo_doc_identidad','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('expedido_usuario','Expedido en:') !!}
          {!! Form::select('expedido_usuario',$ciudad->pluck('nombre_ciudad','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
        </div>
      
          <div class="col-md-2">
            {!! Form::label('apellido_usuario','* Apellidos:') !!}
          </div>
          <div class="col-md-10">
            {!! Form::text('apellido_usuario',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
          </div>
    
          <div class="col-md-2 ">
            {!! Form::label('nombre_usuario','* Nombres:') !!}
          </div>
          <div class="col-md-10">
            {!! Form::text('nombre_usuario',null,array('placeholder' => 'Ingrese Nombre','class'=>'form-control')) !!}
                @if ($errors->has('name'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>
    

         <div class="form-group">
          <div class="col-md-4">
            {!! Form::label('fecha_nac_usuario','* Fecha de nacimiento:') !!}
          </div>
          <div class="col-md-10">
            <input name='fecha_nac_usuario' type="date" class="form-control" id="birthday" value="<?php 
                   if(isset($_SESSION["birthday_patient"])) {
                      echo $_SESSION["birthday_patient"];
                   }?>" required>
          </div>          
        </div>
        
        <div class=" form-group col-md-4">
          {{ csrf_field()}}           
          {!! Form::label('pais_usuario','* Pais:') !!}
          {!! Form::select('pais_usuario',$pais->pluck('nombre_pais','id'),null,['id'=>'id_pais','placeholder' => 'Seleccione','class'=>'form-control'])!!}
        </div>
 
        <div class="form-group col-md-4">
          {!! Form::label('ciudad_usuario','* Ciudad:') !!}
          {!! Form::select('ciudad_usuario',['placeholder' => 'Seleccione'],null,['id'=>'id_ciudad','class'=>'form-control'])!!}
        </div>

        <div class="form-group col-md-4">
          {!! Form::label('provincia_usuario','* Provincia:') !!}
          {!! Form::select('provincia_usuario',['placeholder' => 'Seleccione'],null,['id'=>'id_provincia','class'=>'form-control'])!!}
        </div>

        <div class="form-group col-md-6">
          {!! Form::label('sexo_usuario','Genero:') !!}
           {!! Form::select('sexo_usuario',array('Femenino','Masculino'),null,['class'=>'form-control'])!!}
           
        </div>
         <div class="form-group col-md-6">
          {!! Form::label('estado_civil_usuario','Estado civil:') !!}
          {!! Form::select('estado_civil_usuario',$estado->pluck('estado_civil','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
        </div>

       
        <div class="form-group">
          <div class="col-md-3"> 
            {{ Form::label('email_usuario','Correo electronico:') }}
          </div>
          <div class="col-md-9">
            {{ Form::email('email_usuario',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) }}
          </div>
        </div>


        <div class="form-group col-md-6">
          {{ Form::label('telefono_usuario','Telefono:') }}
          {{ Form::text('telefono_usuario',null,array('placeholder' => 'Ingrese su Telefono','class'=>'form-control')) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('celular_usuario','Celular:') }}
          {{ Form::text('celular_usuario',null,array('placeholder' => 'Ingrese su celular','class'=>'form-control')) }}
        </div>


        <div class="form-group">
          <div class="col-md-2"> 
            {{ Form::label('direcion_usuario','* Direccion:') }}
          </div>
          <div class="col-md-10"> 
            {{ Form::text('direcion_usuario',null,array('placeholder' => 'Ingrese direccion','class'=>'form-control')) }}
          </div>
        </div>
        



  </div><!--cierre panel body-->
</div><!--cierre panel default-->

    {!! Form::button('Crear Nuevo Usuario', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
    {{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}

 
 {!! Form::close() !!}

@endsection