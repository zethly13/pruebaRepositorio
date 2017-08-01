@extends('layout.master')
@section('contenido')
<table>
@foreach($acceso as $accesos)
<tr>
	<td>{{ $accesos->id }}</td>
	<td>{{ $accesos->nombre_acceso}}</td>
	<td><a href="{{ route($accesos->ruta_acceso) }}">{{ $accesos->nombre_acceso}}</a></td>
</tr>

@endforeach
</table>

@endsection