<table class="table table-condensed table-striped table-bordered">
	<tbody>
		@foreach($accesos as $acceso)
			<tr>
				<td colspan="2" class="info">{{ $acceso->nombre_acceso }}</td>
			</tr>
			@foreach($subAcceso as $permisos)
				@if($permisos->acceso->id == $acceso->id)
					<tr>
						<td>{{ $permisos->nombre_sub_acceso}}</td>
						<td>
						
						<?php $input = '<input name="permiso[]" type="checkbox" value="'.$permisos->id.'">'; ?>
						@foreach($subAccesoDefinidos as $existe)
							@if($permisos->id==$existe->id_sub_acceso)
								{{-- <td>{{ $existe->id_sub_acceso}}</td> --}}
								
								<?php $input = '<input  name="permiso[]"type="checkbox" checked="checked" value="'.$permisos->id.'">'; ?>
							@endif	 
						@endforeach
						{!! $input !!}
		  			</td>
					</tr>
				@endif
			@endforeach
		@endforeach
	</tbody>
</table>
