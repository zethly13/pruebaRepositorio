@extends('layout.master')

@section('contenido')
{{-- 	@foreach ($rol as $rol_editar)
		{{ $rol_editar }}
	@endforeach	
	 --}}
	<h2>prueba de edicion</h2>
	{{ Form::open(array('route' =>  array('roles.update', $rol->id), 'method' => 'POST'), array('role'=> 'form')) }}
	{{ method_field('PUT') }}
		{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}
		{{ Form::label('nombre_rol', 'Nombre del Rol a editar') }}
		{{ Form::text('nombre_rol',$rol->nombre_rol, array('placeholder'=> $rol->nombre_rol, 'class' => 'form-control')) }}
		{{ Form::label('desc_rol', 'Descripcion Rol') }}
		{{ Form::text('desc_rol',$rol->descripcion_rol, array('placeholder'=> $rol->descripcion_rol, 'class' => 'form-control')) }}
		{{ Form::button('editar Rol', array('type'=> 'submit')) }}

	{{ Form::close() }}

@endsection