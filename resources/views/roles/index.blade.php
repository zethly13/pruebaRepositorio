@extends('layout.master')
@section('contenido')
<h1>Lista de Roles creados</h1>

<table class="table table-bordered">
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
<h2><a href="{{ URL::to('roles/create') }}">Crear un Rol</a></h2>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}