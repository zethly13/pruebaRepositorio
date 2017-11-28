@extends('layout.master')
@section('contenido')
<h1><center>LISTA DE ROLES CREADOS</center></h1>
<h2><a href="{{ URL::to('roles/create') }}">Crear un Rol</a></h2>
</br>
<div class="table-responsive">  
	<table  class="table table-sm table-condensed table-striped table-bordered">
		<thead>
			<tr class="text-center table-info">
				<th class="text-center">Nro</th>
        <th class="text-center">NOMBRE ROL</th>
        <th class="text-center">DESCRIPCION</th>
        <th class="text-center">MODIFICAR</th>
        <th class="text-center">ELIMINAR</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($rol as $roles)
			<tr>
				<td class="text-center">{{ $roles->id }}</td>
				<td>{{ $roles->nombre_rol }}</td>
				<td>{{ $roles->descripcion_rol }}</td>
				<td class="text-center"><a href="{{ route('roles.edit', $roles->id) }}" " type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
				<td class="text-center">
					{!! Form::open(array('route' =>array('roles.destroy',$roles->id),'method'=>'delete')) !!}
          {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
          {!! Form::close() !!}
        </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}