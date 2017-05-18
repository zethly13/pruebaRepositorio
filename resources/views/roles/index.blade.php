
@extends('layout.master')
@section('contenido')
<h1>Lista de Roles creados</h1>

<div class="table-responsive container-fluid">  
	<table  class="table table-condensed table-striped table-bordered">
		<thead>
			<th class="col-lg-1">Nro</th>
        	<th class="col-lg-2">NOMBRE ROL</th>
        	<th class="col-lg-4">DESCRIPCION</th>
        	<th class="col-lg-2">MODIFICAR</th>
        	<th class="col-lg-1">ELIMINAR</th>
		</thead>

		@foreach ($rol as $roles)
			<tr>
				<td>{{ $roles->id }}</td>
				<td>{{ $roles->nombre_rol }}</td>
				<td>{{ $roles->descripcion_rol }}</td>
				<td><a href="{{ route('roles.edit', $roles->id) }}">Modificar</a></td>
				<td >{!! Form::open(array('route' =>array('roles.destroy',$roles->id),'method'=>'delete')) !!}
                        <input type="submit"  value ="ELIMINAR" >
                        {!! Form::close() !!}</td>
			</tr>
		@endforeach
	</table>
</div>
<h2><a href="{{ URL::to('roles/create') }}">Crear un Rol</a></h2>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}