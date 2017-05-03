@extends('layout.master')
@section('contenido')
<h1>Lista de Rols</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('roles/create') }}">Crear un Rol</a></h2>

	<thead>No</thead><thead>Nombre Rol</thead><thead>Descripcion</thead><thead>Modificar</thead>

@foreach ($rol as $roles)
<tr>
	<td>{{ $roles->id }}</td>
	<td>{{ $roles->nombre_rol }}</td>
	<td>{{ $roles->descripcion_rol }}</td>
	<td><a href="{{ route('roles.edit', $roles->id) }}">Modificar</a></td>
	<td>{!! Form::open(array('route' =>array('roles.destroy',$roles->id),'method'=>'delete')) !!}
                        <input type="submit"  value ="ELIMINAR" >
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}