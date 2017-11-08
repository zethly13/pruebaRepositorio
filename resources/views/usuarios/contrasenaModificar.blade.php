@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading text-center">FORMULARIO MODIFICAR CONTRASEÑA DE USUARIO</div>
    <div class="panel-body">
    	<div class="form-horizontal">
        <!--panel de errores-->
        @include('errores.msjError')

        {{ Form::open(array('route' =>array('usuarios.validarModContrasena', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
					<div class="form-group">
        		{!! Form::label('contrasena', 'Ingrese su contraseña:',['class'=>' control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::password('contrasena', array('placeholder'=> 'Introduce su contraseña', 'class' => 'form-control')) !!}
        		</div>
    		 	</div>

     			<div class="form-group">
        		{!! Form::label('nueva_contrasena', 'Ingrese su nueva contraseña:',['class'=>'control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::password('nueva_contrasena', ['placeholder'=>'Introduce su nueva contraseña','class' => 'form-control']) !!}
        		</div>
     			</div>

     			<div class="form-group">
        		{!! Form::label('reescribir_contrasena', 'Reescriba su nueva contraseña:',['class'=>'control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::password('reescribir_contrasena', ['placeholder'=>'Reescribe tu nueva contraseña','class' => 'form-control']) !!}
        		</div>
     			</div>
     		</div>
        <div class="text-center">{{ Form::button('editar Login', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
        {!! form::close() !!}   
				
			</div><!--cierre form-horizontal-->
		</div><!--cierre panel body-->
 	</div><!--cierre panel defautl-->

@endsection