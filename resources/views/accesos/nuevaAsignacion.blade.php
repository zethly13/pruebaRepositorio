@extends('layout.master')
@section('contenido')
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>Doc Identidad</th>
			<th>usuario</th>
			<th>Sub-Roles Asignados</th>
			<th>Añadir Nuevo Sub-Rol</th>
		</tr>
	</thead>
	<tbody>
			@foreach($permisosAsignados as $permisos)
				<tr>
				<td>Rol: {{ $permisos->sub_rol->rol->nombre_rol }}<br>
				Sub-Rol: {{ $permisos->sub_rol->nombre_sub_rol	 }}<br>
				Unidad: {{ $permisos->unidad->nombre_unidad	 }}<br>
				Funcion: {{ $permisos->funcion->nombre_funcion	 }}<br>
				Periodo: desde {{ $permisos->fecha_inicio	 }} hasta {{ $permisos->fecha_fin	 }} <br>
				Activo: {{ $permisos->activo	 }}</td>
				</tr>
				
			@endforeach
	</tbody>
</table>
<h3 align="center">FORMULARIO DE ASIGNACION DE NUEVO SUB-ROL A UN USUARIO</h3>
{!! Form::open(array('route' => array('accesos.index'), 'method' =>'get'), array('role'=>'form')) !!}
	{!! Form::label('usuario','Documento de Identidad') !!}
	{!! Form::text('nombreUsuario',null,array('placeholder'=>'Ingrese Doc de Identidad','class'=>'form-control','id'=>'disabledTextInput')) !!}

	{!! Form::label('nombre','Nombre de Usuario') !!}
	{!! Form::text('nombre',null,array('placeholder'=>'Nombre de Usuario','class'=>'form-control')) !!}
	{!! Form::label('apellido','Apellidos de Usuario') !!}
	{!! Form::text('apellido',null,array('placeholder'=>'Apellidos de Usuario','class'=>'form-control')) !!}<br>
	
	{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
{!! Form::close() !!}
@endsection