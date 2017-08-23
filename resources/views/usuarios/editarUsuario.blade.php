
@extends('layout.master')
@section('contenido') 
 <div class="panel panel-default">  
  <div class="panel-heading text-center">EDICION FORMULARIO DE REGISTRO</div>
    <div class="panel-body">
    <div class="form-horizontal">
   {{ Form::open(array('route' =>array('usuarios.update', $user->id), 'method' => 'POST'), array('role'=> 'form')) }}
   {{ method_field('PUT') }}
    <div class="form-group">
        <div class="col-md-4">
         {{ Form::label('numero_identidad_usuario','Documento de indentidad:')}}
         {{ Form::text('numero_identidad_usuario',$user->doc_identidad, array('placeholder'=> $user->doc_identidad, 'class' => 'form-control')) }}
        </div>
        <div class="col-md-4">
        {!! Form::label('tipo_doc_usuario','Tipo documento:') !!}
         <select name="tipo_doc_usuario" class="form-control">
              <option value='{{ $user->id_tipo_doc_identidad }}'>{{ $user->nombre_tipo_doc_identidad }}</option>  
                @foreach ($tipoDocId as $tipoDoc)
              <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombre_tipo_doc_identidad}}</option>
                @endforeach 
         </select>
         </div>
         <div class="col-md-4">
         {!! Form::label('expedido_usuario','Expedido en:') !!}
         <select name="expedido_usuario" class="form-control">
             <option value='{{ $user->ciudad_expedido_doc }}'>{{ $user->nombre_ciudad }}</option>  
                @foreach ($ciudad as $expedido)
             <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
                @endforeach 
         </select>
         </div>
    </div>

    <div class="form-group">
        {!! Form::label('apellido_usuario','Apellidos:',['class'=>'col-md-2']) !!}
        <div class="col-md-10">
        <input type="text" class="form-control" id="exampleInputName2" name="apellido_usuario" value="{{ $user->apellidos }}">
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nombre_usuario','Nombres:',['class'=>'col-md-2']) !!}
        <div class="col-md-10">
        {!! form::text('nombre_usuario',$user->nombres,array('placeholder'=>$user->nombres, 'class'=>'form-control')) !!}
                @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('fecha_nac_usuario','Fecha de nacimiento:',['class'=>'col-md-3']) !!}
        <div class="col-md-9">{!! form::text('fecha_nac_usuario',$user->fecha_nac,array('placeholder'=>$user->fecha_nac, 'class'=>'form-control')) !!}</div>
    </div>
    <div class=" form-group">
        <div class="col-md-4">
        {!! Form::label('pais_usuario','Pais:') !!}
         <select name="pais_usuario" class="form-control">
              <option value='-1'>Seleccione</option>  
                @foreach ($pais as $paises)
              <option value="{{$paises->id}}">{{$paises->nombre_pais}}</option>
                @endforeach 
         </select>
         </div>
         <div class="col-md-4">
        {!! Form::label('ciudad_usuario','Ciudad:') !!}
         <select name="ciudad_usuario" class="form-control">
              <option value='-1'>Seleccione</option>  
                @foreach ($ciudad as $expedido)
         <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
                @endforeach 
         </select>
         </div>
         <div class="col-md-4">
         {!! Form::label('provincia_usuario','Provincia:') !!}
         <select name="provincia_usuario" class="form-control">
              <option value='{{ $user->id_provincia }}'>{{ $user->nombre_provincia }}</option>  
                @foreach ($provincia as $provincia)
              <option value="{{$provincia->id}}">{{$provincia->nombre_provincia}}</option>
                @endforeach 
        </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
        {!! Form::label('sexo_usuario','Genero:') !!}
        <input type="text" class= "form-control"  id="sexoUsuario"  name="sexo_usuario" list="Sexo" value="{{ $user->sexo }}">
          <datalist id="Sexo">
            <option value="Femenino">
            <option value="Masculino">
          </datalist>
          </div>
        <div class="col-md-6">
        {!! Form::label('estado_civil_usuario','Estado civil:') !!}
        <select name="estado_civil_usuario" class="form-control">
              <option value='{{ $user->id_estado_civil }}'>{{ $user->estado_civil }}</option>  
                @foreach ($estado as $estado)
              <option value="{{$estado->id}}">{{$estado->estado_civil}}</option>
                @endforeach 
        </select>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email_usuario','Correo electronico:',['class'=>'col-md-3']) }}
        <div class="col-md-9">{{ form::Email('email_usuario',null,['class'=>'form-control']) }}</div>
    </div> 
    
    <div class="form-group">
        <div class="col-md-6">
        {{ Form::label('telefono_usuario','Telefono:') }}
        {{ form::text('telefono_usuario',null,['class'=>'form-control']) }}
        </div>
        <div class="col-md-6">
        {{ Form::label('celular_usuario','Celular:') }}
        {{ form::text('celular_usuario',null,['class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('direcion_usuario','Direccion:',['class'=>'col-md-2']) }}
        <div class="col-md-10">{{ form::text('direcion_usuario',null,['class'=>'form-control']) }}</div>
    </div>    
    <div class="text-center">{{ Form::button('editar Usuario', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
  {{ Form::close() }}
  </div><!--cierre panel body-->
 </div><!--cierre panel body-->
</div><!--cierre panel default-->
@endsection