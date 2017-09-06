@extends('layout.master')
@section('contenido')
	@include('accesos.lista')
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
			@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->id }}</td>
			<td>{{ $usuario->doc_identidad }}</td>
			<td>{{ $usuario->NombreCompleto }}</td>
				<td>
			@foreach($permisosAsignados as $permisos)
				<table border="3">
				<tr>
				@if($permisos->id_usuario == $usuario->id)
				<td>Rol: {{ $permisos->sub_rol->rol->nombre_rol }}<br>
				Sub-Rol: {{ $permisos->sub_rol->nombre_sub_rol	 }}<br>
				Unidad: {{ $permisos->unidad->nombre_unidad	 }}<br>
				Funcion: {{ $permisos->funcion->nombre_funcion	 }}<br>
				Periodo: desde {{ $permisos->fecha_inicio	 }} hasta {{ $permisos->fecha_fin	 }} <br>
				Activo: {{ $permisos->activo	 }}
				<td><a href="{{ route('accesos.nuevaAsignacion', $permisos->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
				</td>
				@endif
				</tr>
				</table>
			@endforeach
			</td>
			<td class="text-center"><a href="{{ route('accesos.nuevaAsignacion', $usuario->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Nueva Asignacion</a></td>
		</tr>
			@endforeach
	</tbody>
</table>
@endsection