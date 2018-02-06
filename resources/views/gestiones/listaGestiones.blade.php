	@extends('layout.master')
	@section('contenido')
	<h1>
		<center>GESTIONES</center>
	</h1>
	<div class="row">
		<h2><a href="{{ URL::to('gestiones/create') }}">Crear Gestion</a></h2></div></br>
		<div class="table-responsive">  
			<table  class="table table-sm table-condensed table-striped table-bordered">
				<thead>
					<tr class="text-center table-info">
						<th class="text-center">Nro</th>
						<th class="text-center">NOMBRE ROL</th>
						<th class="text-center">FECHA INICIO</th>
						<th class="text-center">FECHA FIN</th>
						<th class="text-center">ACTIVO</th>
						<th class="text-center">MODIFICAR</th>
						<th class="text-center">ELIMINAR</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($gestiones as $key=>$gestion)
					<tr>
						<td class="text-center">{{ ++$key }}</td>
						{{-- <td>{{ $gestion }}</td> --}}
						<td>{{ $gestion->anioGestionTipo }}</td>
						<td>{{ $gestion->fecha_inicio }}</td>
						<td>{{ $gestion->fecha_fin }}</td>
						<td>{{ $gestion->activo }}
						@if($gestion->activo=='SI')
                			<a href="{{ route('gestiones.modActivo',$gestion->id)}}" type="button" class="btn btn-danger btn-responsive btn-sm">Desactivar</a>
       					@else
							<a href="{{ route('gestiones.modActivo',$gestion->id)}}" type="button" class="btn btn-success btn-responsive btn-sm">Activar</a>
      					@endif </td>

						<td class="text-center"><a href="{{ route('gestiones.edit', $gestion->id) }}" " type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
						<td class="text-center">
							{!! Form::open(array('route' =>array('gestiones.destroy',$gestion->id),'method'=>'delete')) !!}
							{{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endsection
