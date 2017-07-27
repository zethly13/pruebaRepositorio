@extends('layout.master')
@section('contenido')
<h1>Lista de Sub-Roles</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('sub_roles/create') }}">CREAR UN SUB-ROL</a></h2>

<div class="table-responsive container-fluid ">  
	<table  class="table table-condensed table-striped table-bordered table-hover">
		<thead>
			<th class="col-lg-1">Nro</th>
        	<th class="col-lg-2">NOMBRE SUB-ROL</th>
        	<th class="col-lg-4">DESCRIPCION</th>
        	<th class="col-lg-2">MODIFICAR</th>
        	<th class="col-lg-1">ELIMINAR</th>
		</thead>

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
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}