@extends('layout.master') 
@section('contenido') 
<div class="card border-info mb-2"> 
  <div class="card-header text-center text-muted"><strong>EDICIÓN FORMULARIO DE REGISTRO</strong></div>
  <div class="card-body">
   {{ Form::open(array('route' =>array('usuarios.update', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
   {{ method_field('PUT') }}
    <form>

   <div class="form-row">
        <div class="form-group col-sm-6">
          {!! Form::label('login_usuario','* Login:')!!}
          {!! Form::text('login_usuario',$usuario->login,array('placeholder' => $usuario->login, 'class'=>'form-control')) !!}
        </div>

        <div class="form-group col-sm-6">
          {!! Form::label('contraseña_usuario','* Contraseña:')!!}
          {!! Form::text('contraseña_usuario',null,array('class'=>'form-control')) !!}
        </div>

      </div>

    <div class="form-row">
        <div class="form-group col-md-4">
         {{ Form::label('numero_identidad_usuario','Documento de indentidad:')}}
         {{ Form::text('numero_identidad_usuario',$usuario->doc_identidad, array('placeholder'=> $usuario->doc_identidad, 'class' => 'form-control')) }}
        </div>

        <div class="form-group col-md-4">
        {!! Form::label('tipo_doc_usuario','Tipo documento:') !!}
        {{ Form::select('tipo_doc_usuario', $tipoDocId, $usuario->tipo_doc_identidad->id, array('placeholder'=> $usuario->doc_identidad, 'class' => 'form-control')) }}
        </div>

        {{--   <select name="tipo_doc_usuario" class="form-control">
              <option value='{{ $user->id_tipo_doc_identidad }}'>{{ $user->nombre_tipo_doc_identidad }}</option>  
                @foreach ($tipoDocId as $tipoDoc)
              <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombre_tipo_doc_identidad}}</option>
                @endforeach 
         </select>--}}

         
         <div class="form-group col-md-4">
         {!! Form::label('expedido_usuario','Expedido en:') !!}
         <select name="expedido_usuario" class="form-control">
             <option value='{{ $usuario->ciudad_expedido_doc }}'>{{ $usuario->ciudad->nombre_ciudad }}</option>  
                @foreach ($ciudad as $expedido)
             <option value="{{$expedido->id}}">{{$expedido->nombre_ciudad}}</option>
                @endforeach 
         </select>
         </div>
    </div>

    <div class="form-row">
        {!! Form::label('apellido_usuario','Apellidos:',['class'=>'form-group col-md-1']) !!}
        <div class="form-group col-md-11">
        <input type="text" class="form-control" id="exampleInputName2" name="apellido_usuario" value="{{ $usuario->apellidos }}">
        </div>
    </div>
    <div class="form-row">
        {!! Form::label('nombre_usuario','Nombres:',['class'=>'form-group col-md-1']) !!}
        <div class="form-group col-md-11">
        {!! form::text('nombre_usuario',$usuario->nombres,array('placeholder'=>$usuario->nombres, 'class'=>'form-control')) !!}
                @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
        </div>
    </div>

    <div class="form-row">
        {!! Form::label('fecha_nac_usuario','Fecha de nacimiento:',['class'=>'form-group col-md-2']) !!}
        <div class="form-group col-md-10">
           {!! form::text('fecha_nac_usuario',$usuario->fecha_nac,array('placeholder'=>$usuario->fecha_nac, 'class'=>'form-control')) !!}
        </div>
    </div>
    <div class=" form-row">
        <div class="form-group col-md-4">
        {!! Form::label('pais_usuario','Pais:') !!}
         <select name="pais_usuario" class="form-control" id="id_pais">
              <option value='{{ $usuario->provincia->id }}'>{{ $usuario->provincia->ciudad->pais->nombre_pais}}</option>  
                @foreach ($pais as $paises)
              <option value="{{$paises->id}}">{{$paises->nombre_pais}}</option>
                @endforeach 
         </select>
         </div>
         <div class="form-group col-md-4">
        {!! Form::label('ciudad_usuario','Ciudad:') !!}
         <select name="ciudad_usuario" class="form-control" id="id_ciudad">
              <option value='{{ $usuario->provincia->id}}'>{{ $usuario->provincia->ciudad->nombre_ciudad,$usuario->provincia->nombre_provincia}}</option>  
              
         </select>
         </div>
         <div class="form-group col-md-4">
         {!! Form::label('provincia_usuario','Provincia:') !!}
         <select name="provincia_usuario" class="form-control" id="id_provincia">
              <option value='{{ $usuario->provincia->id }}'>{{ $usuario->provincia->nombre_provincia }}</option>  
               
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        {!! Form::label('sexo_usuario','Genero:') !!}
        <input type="text" class= "form-control"  id="sexoUsuario"  name="sexo_usuario" list="Sexo" value="{{ $usuario->sexo }}">
          <datalist id="Sexo">
            <option value="Femenino">
            <option value="Masculino">
          </datalist>
          </div>
        <div class="form-group col-md-6">
        {!! Form::label('estado_civil_usuario','Estado civil:') !!}
        <select name="estado_civil_usuario" class="form-control">
              <option value='{{ $usuario->estado_civil->id}}'>{{ $usuario->estado_civil->estado_civil }}</option>  
                @foreach ($estado as $estado)
              <option value="{{$estado->id}}">{{$estado->estado_civil}}</option>
                @endforeach 
        </select>
        </div>
    </div>
    
    
    
    <div class="text-center">{{ Form::button('Editar Usuario', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
  {{ Form::close() }}
  </div><!--cierre panel body-->
 </div><!--cierre panel body-->
</div><!--cierre panel default-->
@endsection