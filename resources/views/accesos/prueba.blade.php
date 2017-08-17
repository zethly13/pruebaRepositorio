<table border=1>
@foreach($subAcceso as $permisos)
<tr >
	<td>{{ $permisos->id }}</td>
	<td>{{ $permisos->acceso->nombre_acceso }}</td>
	<!--td>{{-- Form::checkbox('permiso',$permisos->id,null,['class'=>$permisos->nombre_sub_acceso]) --}}</td>-->
	<td><input name="permiso[]" type="checkbox" value="{{ $permisos->id }}">{{ $permisos->nombre_sub_acceso}}</td>

</tr>

@endforeach
</table>
 