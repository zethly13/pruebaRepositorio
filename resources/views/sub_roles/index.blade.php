@extends('layout.master')
@section('contenido')
<h1><center>LISTA DE SUB ROLES</center></h1>
<h3><a href="{{ URL::to('sub_roles/create') }}">CREAR UN SUB-ROL</a></h3>

<div class="table-responsive">  
	<table  class="table table-sm table-condensed table-striped table-bordered table-hover">
		<thead>
			<tr class="text-center table-info">
				<th class="text-center">Nro</th>
       	<th class="text-center">NOMBRE SUB-ROL</th>
        <th class="text-center">DESCRIPCION</th>
        <th class="text-center">NOMBRE ROL</th>
        <th class="text-center">MODIFICAR</th>
        <th class="text-center">ELIMINAR</th>
      </tr>
		</thead>
		<tbody>
			@foreach ($sRoles as $roles)
			<tr>
				<td class="text-center">{{ $roles->id }}</td>
				<td>{{ $roles->nombre_sub_rol }}</td>
				<td>{{ $roles->descripcion_sub_rol }}</td>
				<td>{{ $roles->nombre_rol }}</td>
				<td class="text-center">
					<a href="{{ route('sub_roles.edit', $roles->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a>
				</td>
				<td class="text-center">
					{!! Form::open(array('route' =>array('sub_roles.destroy',$roles->id),'method'=>'delete')) !!}
			    {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash','onclick' => 'return confirm("¿Estas Seguro que desea eliminar el sub rol?")')) }}			
			 {!! Form::close() !!}
        	</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}