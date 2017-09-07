@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading text-center">EDITAR SUB-ROLES</div>
    <div class="panel-body">
	<div class="form-horizontal">
	{{ Form::open(array('route' =>  array('sub_roles.update', $sRol->id), 'method' => 'POST'), array('role'=> 'form')) }}
	{{ method_field('PUT') }}
	<div class="form-group">
		{{ Form::label('nombre_sub_rol', 'Nombre del sub Rol a editar',['class'=>'col-md-3'])}}
		<div class="col-md-9">{{ Form::text('nombre_sub_rol',$sRol->nombre_sub_rol, array('placeholder'=> $sRol->nombre_sub_rol, 'class' => 'form-control')) }}</div>
	</div>
	<div class="form-group">
		{{ Form::label('desc_sub_rol', 'Descripcion Rol',['class'=>'col-md-3']) }}
		<div class="col-md-9">{{ Form::text('desc_sub_rol',$sRol->descripcion_sub_rol, array('placeholder'=> $sRol->descripcion_sub_rol, 'class' => 'form-control')) }}</div>
	</div>
	<div class="form-group">	
		{{ Form::label('rol_asignado','Rol Asignado',['class'=>'col-md-3']) }}
		<div class="col-md-9">
		<select name="rol_seleccionado" class="form-control">
		<option value={{ $sRol->id_rol }}>{{ $sRol->nombre_rol }}</option>	
		@foreach ($rol as $roles)
			<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
		@endforeach
		</select>
		</div>
	</div>
		@include('accesos.sub_accesos_permitidos')


		{{ Form::button('editar sub Rol', array('type'=> 'submit')) }}
	{{ Form::close() }}
</div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->
@endsection