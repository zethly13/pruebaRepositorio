@extends('layout.master')
@section('contenido')
<h1>Lista de Roles creados</h1>

<div class="table-responsive container-fluid">  
	<table  class="table table-condensed table-striped table-bordered">
		<thead>
			<th class="text-center">Nro</th>
        	<th class="text-center">NOMBRE ROL</th>
        	<th class="text-center">DESCRIPCION</th>
        	<th class="text-center">MODIFICAR</th>
        	<th class="text-center">ELIMINAR</th>
		</thead>

		@foreach ($rol as $roles)
			<tr>
				<td>{{ $roles->id }}</td>
				<td>{{ $roles->nombre_rol }}</td>
				<td>{{ $roles->descripcion_rol }}</td>
				<td><a href="{{ route('roles.edit', $roles->id) }}" " type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
				<td >{!! Form::open(array('route' =>array('roles.destroy',$roles->id),'method'=>'delete')) !!}
                    {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
                        {!! Form::close() !!}</td>
			</tr>
		@endforeach
	</table>
</div>
<h2><a href="{{ URL::to('roles/create') }}">Crear un Rol</a></h2>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}