@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading text-center">FORMULARIO MODIFICAR LOGIN DE USUARIO</div>
    <div class="panel-body">
    	<div class="form-horizontal">

					<div class="form-group">
        		{!! Form::label('contrasena', 'Ingrese su contraseña:',['class'=>' control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::text('contrasena',null, array('placeholder'=> 'Introduce su contraseña', 'class' => 'form-control')) !!}
        		</div>
    		 	</div>

     			<div class="form-group">
        		{!! Form::label('nueva_contrasena', 'Ingrese su nueva contraseña:',['class'=>'control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::password('nueva_contrasena', ['placeholder'=>'Introduce su nueva contraseña','class' => 'form-control']) !!}
        		</div>
     			</div>

     			<div class="form-group">
        		{!! Form::label('reescribir_contrasena', 'Ingrese su nueva contraseña:',['class'=>'control-label col-sm-4']) !!}
        		<div class="col-sm-8">
        		{!! Form::password('reescribir_contrasena', ['placeholder'=>'Reescribe tu nueva contraseña','class' => 'form-control']) !!}
        		</div>
     			</div>
     		</div>

				
			</div><!--cierre form-horizontal-->
		</div><!--cierre panel body-->
 	</div><!--cierre panel defautl-->

@endsection