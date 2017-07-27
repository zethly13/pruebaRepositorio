@extends('layout.master')

@section('contenido')
	
	<div class="panel panel-default">  
  	<div class="panel-heading "><center>REGISTRO DE ROL</div>
    <div class="panel-body">  
	{{ Form::open(array('route' => 'roles.store', 'method' => 'POST'), array('role'=> 'form')) }}
	
		{{ Form::label('nombre_rol', 'Nombre del Nuevo Rol') }}
		{{ Form::text('nombre_rol',null, array('placeholder'=> 'Introduce el nuevo Rol', 'class' => 'form-control')) }}
		{{ Form::label('desc_rol', 'Descripcion Rol') }}
		{{ Form::text('desc_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Rol', 'class' => 'form-control')) }}
		<br>
		{{ Form::button('Crear Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}
		<h4><a href="{{ route('roles.index') }}">Lista Roles</a></h4>

		{{ Form::close() }}


	</div><!--cierre panel body-->
</div><!--cierre panel default-->

@endsection