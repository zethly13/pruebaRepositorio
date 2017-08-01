@extends('layout.master')
@section('contenido')
<h1>Lista de Sub-Roles</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('sub_roles/create') }}">CREAR UN SUB-ROL</a></h2>

<div class="table-responsive container-fluid ">  
	<table  class="table table-condensed table-striped table-bordered table-hover">
		<thead>
			<th class="text-center">Nro</th>
        	<th class="text-center">NOMBRE SUB-ROL</th>
        	<th class="text-center">DESCRIPCION</th>
        	<th class="text-center">NOMBRE ROL</th>
        	<th class="text-center">MODIFICAR</th>
        	<th class="text-center">ELIMINAR</th>
		</thead>

@foreach ($sRoles as $roles)
<tr>
	<td class="text-center">{{ $roles->id }}</td>
	<td>{{ $roles->nombre_sub_rol }}</td>
	<td>{{ $roles->descripcion_sub_rol }}</td>
	<td>{{ $roles->nombre_rol }}</td>
	<td><a href="{{ route('sub_roles.edit', $roles->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
	<td>{!! Form::open(array('route' =>array('sub_roles.destroy',$roles->id),'method'=>'delete')) !!}
        {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}