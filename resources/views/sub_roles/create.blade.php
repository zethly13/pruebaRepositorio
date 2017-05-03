@extends('layout.master')

@section('contenido')
	<h1>Registro de Sub-Rol</h1>
	{{ Form::open(array('route' =>array('sub_roles.store','rol_seleccionado'), 'method' => 'POST'), array('role'=> 'form')) }}
		{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}

		<select name="rol_seleccionado">
		<option value='-1'>Seleccione</option>	

		@foreach ($rol as $roles)
			<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
		@endforeach	
		</select>
		</br>
		{{ Form::label('nombre_sub_rol', 'Nombre del Nuevo Sub-Rol') }}
		{{ Form::text('nombre_sub_rol',null, array('placeholder'=> 'Introduce el nuevo Sub Rol', 'class' => 'form-control')) }}
		</br>
		{{ Form::label('desc_sub_rol', 'Descripcion del Sub-Rol') }}
		{{ Form::text('desc_sub_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Sub-Rol', 'class' => 'form-control')) }}
		</br>
		{{ Form::button('Crear Sub Rol', array('type'=> 'submit')) }}

	{{ Form::close() }}

@endsection