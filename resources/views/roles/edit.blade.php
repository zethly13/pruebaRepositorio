@extends('layout.master')

@section('contenido')
{{-- 	@foreach ($rol as $rol_editar)
		{{ $rol_editar }}
	@endforeach	
	 --}}
<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>EDITAR ROLES</strong></div>
  <div class="card-body">
	@include('errores.msjError')
	{!! Form::open(array('route' =>  array('roles.update', $rol->id), 'method' => 'POST'), array('role'=> 'form')) !!}
	{{ method_field('PUT') }}
		{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}
	<form>
		<div class="form-group row">
			{!! Form::label('nombre_rol', 'Nombre del Rol a editar :',['class'=>'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('nombre_rol',$rol->nombre_rol, array('placeholder'=> $rol->nombre_rol, 'class' => 'form-control')) !!}
			</div>
		</div>
		
		<div class="form-group row">
			{!! Form::label('desc_rol', 'Descripcion Rol:',['class'=>'col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('desc_rol',$rol->descripcion_rol, array('placeholder'=> $rol->descripcion_rol, 'class' => 'form-control')) !!}
			</div>
		</div>
		<div class="text-center">
			{!! Form::button('editar Rol', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
		</div>
		{!! Form::close() !!}
	</form>
	</div>
</div>
@endsection