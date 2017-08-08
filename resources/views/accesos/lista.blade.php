@extends('layout.master')
@section('contenido')
<table border=1>
@foreach($acceso as $accesos)
<tr >
	<td>{{ $accesos->id }}</td>
	<td>{{ $accesos->nombre_acceso}}</td>
	<td>{{ $accesos->sub_accesos}}</td>
	<td><a href="{{ route($accesos->ruta_acceso) }}">{{ $accesos->nombre_acceso}}</a></td>
	<td><a href="{{ route('accesos.listaSubAcceso', $accesos->id) }}">prueba</a></td>
	<td>{{ route('accesos.listaSubAcceso', $accesos->id) }}</td>
	
	
</tr>

@endforeach
</table>

@endsection