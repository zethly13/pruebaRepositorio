@extends('layout.master')
@section('contenido')
<h1>Lista de Rols</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('sub_roles/create') }}">Crear un Rol</a></h2>

	<thead>
		<td>No</td>
		<td>Nombre Rol</td>
		<td>Descripcion</td>
		<td>Rol</td>
		<td>Modificar</td>
	</thead><thead></thead><thead></thead><thead></thead>

@foreach ($sRoles as $roles)
<tr>
	<td>{{ $roles->id }}</td>
	<td>{{ $roles->nombre_sub_rol }}</td>
	<td>{{ $roles->descripcion_sub_rol }}</td>
	<td>{{ $roles->nombre_rol }}</td>
	<td><a href="{{ route('sub_roles.edit', $roles->id) }}">Modificar</a></td>
	<td>{!! Form::open(array('route' =>array('sub_roles.destroy',$roles->id),'method'=>'delete')) !!}
                        <input type="submit"  value ="ELIMINAR" >
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}