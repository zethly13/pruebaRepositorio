@extends('layout.master')
@section('contenido')
<h1>Lista de Usuarios</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('usuarios/create') }}">CREAR UN USUARIO</a></h2>

<div class="table-responsive container-fluid">  
	<table  class="table table-condensed table-striped table-bordered">
		<thead>
			<th class="col-lg-1">Nro</th>
        	<th class="col-lg-2">NOMBRE USUARIO</th>
        	<th class="col-lg-2">DOC IDENTIDAD</th>
        	<th class="col-lg-2">prueba</th>
        	<th class="col-lg-2">MODIFICAR</th>
        	<th class="col-lg-1">ELIMINAR</th>
		</thead>

@foreach ($usuario as $user)
<tr>
	<td>{{ $user->id }}</td>
	<td>{{ $user->nombres.' '.$user->apellidos }}</td>
	<td>{{ $user->doc_identidad }}</td>
	<td>{{ $user->id }} </td>
	<td><a href="{{ route('usuarios.edit', $user->id) }}">Modificar</a></td>
	<td>{!! Form::open(array('route' =>array('usuarios.destroy',$user->id),'method'=>'delete')) !!}
                        <input type="submit"  value ="ELIMINAR" >
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}