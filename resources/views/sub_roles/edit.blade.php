@extends('layout.master')
@section('contenido')
	<h2>prueba de edicion subroles</h2>	
	{{ Form::open(array('route' =>  array('sub_roles.update', $sRol->id), 'method' => 'POST'), array('role'=> 'form')) }}
	{{ method_field('PUT') }}
		{{ Form::label('nombre_sub_rol', 'Nombre del sub Rol a editar') }}
		{{ Form::text('nombre_sub_rol',$sRol->nombre_sub_rol, array('placeholder'=> $sRol->nombre_sub_rol, 'class' => 'form-control')) }}
		</br>
		{{ Form::label('desc_sub_rol', 'Descripcion Rol') }}
		{{ Form::text('desc_sub_rol',$sRol->descripcion_sub_rol, array('placeholder'=> $sRol->descripcion_sub_rol, 'class' => 'form-control')) }}
		
		{{ Form::label('rol_asignado','Rol Asignado') }}
		<select name="rol_seleccionado">
		<option value={{ $sRol->id_rol }}>{{ $sRol->nombre_rol }}</option>	
		@foreach ($rol as $roles)
			<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
		@endforeach
		</select>
		</br>
		{{ Form::button('editar sub Rol', array('type'=> 'submit')) }}
	{{ Form::close() }}

@endsection