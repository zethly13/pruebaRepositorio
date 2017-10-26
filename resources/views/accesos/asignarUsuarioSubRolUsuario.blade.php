@extends('layout.master')
@section('contenido')
<div class="panel panel-default">
	<div class="panel-heading text-center"></div>
		<div class="panel-body">
			@include('accesos.lista')
			<div class="table-responsive">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr class="info">
							<th class="text-center">ID</th>
								<th class="text-center">DOC INDENTIDAD</th>
								<th class="text-center">USUARIO</th>
								<th class="text-center">SUB-ROLES ASIGNADOS</th>
								<th class="text-center">AÑADIR NUEVO SUB-ROL</th>
						</tr>
					</thead>
					<tbody>
						@foreach($usuarios as $usuario)
							<tr>
								<td>{{ $usuario->id }}</td>
								<td>{{ $usuario->doc_identidad }}</td>
								<td>{{ $usuario->NombreCompleto }}</td>
								<td>
									@foreach($permisosAsignados as $permisos)
										<table>
											<tr>
												@if($permisos->id_usuario == $usuario->id)
													<td>
														Rol: {{ $permisos->sub_rol->rol->nombre_rol }}<br>
														Sub-Rol: {{ $permisos->sub_rol->nombre_sub_rol	 }}<br>
														Unidad: {{ $permisos->unidad->nombre_unidad	 }}<br>
														Funcion: {{ $permisos->funcion->nombre_funcion	 }}<br>
														Periodo: desde {{ $permisos->fecha_inicio	 }} hasta {{ $permisos->fecha_fin  }} <br>
														Activo:{{ $permisos->activo}} 
															@if($permisos->activo=='SI')
                								<a href="{{ route('accesos.modActivo',$permisos->id)}}" type="button" class="btn btn-danger btn-responsive btn-xs">Desactivar</a>
             									@else
																<a href="{{ route('accesos.modActivo',$permisos->id)}}" type="button" class="btn btn-success btn-responsive btn-xs">Activar</a>
              								@endif 
													<hr>
													<td><a href="{{ route('accesos.modificarAsignacion',$permisos->id)}}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
													</td>
												@endif
											</tr>
										</table>
									@endforeach
								</td>
								<td rowspan="1"><a href="{{ route('accesos.nuevaAsignacion', $usuario->id) }}" type="button" class="btn btn-success btn-responsive glyphicon glyphicon-edit">Nueva Asignacion</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div><!--cierre table responsive-->
		</div><!--cierre panel body-->
	</div><!--cierre panel default-->
@endsection