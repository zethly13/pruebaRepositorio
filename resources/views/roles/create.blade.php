@extends('layout.master')
@section('contenido')
	
<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>CREAR ROLES</strong></div>
  <div class="card-body">
  <h4><a href="{{ route('roles.index') }}">LISTAR ROLES</a></h4></br>
	{!! Form::open(array('route' => 'roles.store', 'method' => 'POST'), array('role'=> 'form')) !!}
	
	<form>
		<div class="form-group row">
			{!! Form::label('nombre_rol', 'Nombre del Nuevo Rol',['class'=>'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('nombre_rol',null, array('placeholder'=> 'Introduce el nuevo Rol', 'class' => 'form-control')) !!}
			</div>
		</div>

		<div class="form-group row">
			{!! Form::label('desc_rol', 'Descripcion Rol',['class'=>'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('desc_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Rol', 'class' => 'form-control')) !!}
			</div>
		</div>

		<div class="text-center">
			{!! Form::button('Crear Rol', array('type'=> 'submit','class'=>'btn btn-primary')) !!}
		
		</div>
		{{ Form::close() }}


	</div><!--cierre panel body-->
</div><!--cierre panel default-->

@endsection