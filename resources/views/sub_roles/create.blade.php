@extends('layout.master')

@section('contenido')
<div class="panel panel-default">  
  	<div class="panel-heading "><center>REGISTRO DE SUB-ROL</div>
    <div class="panel-body">  
	{{ Form::open(array('route' =>array('sub_roles.store','rol_seleccionado'), 'method' => 'POST'), array('role'=> 'form')) }}
		{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}

		<select name="rol_seleccionado" class="form-control">
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
		{!! Form::label('LISTA DE PERMISOS A ASIGNAR','LISTA DE PERMISOS A ASIGNAR') !!}
 		</BR>       
		{{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}
	{{ Form::close() }}

	</div><!--cierre panel body-->
</div><!--cierre panel default-->

@endsection