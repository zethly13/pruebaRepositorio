@extends('layout.master')
@section('contenido')
<h1>Lista de Usuarios</h1>
<table border="1" width="1">
<h2><a href="{{ URL::to('usuarios/create') }}">CREAR UN USUARIO</a></h2>

<div class="table-responsive container-fluid">  
	<table  class="table table-condensed table-striped table-bordered">
		<thead>
			<th class="text-center">Nro</th>
        	<th class="text-center">NOMBRE USUARIO</th>
        	<th class="text-center">DOC IDENTIDAD</th>
        	<th class="text-center">MODIFICAR</th>
        	<th class="text-center">ELIMINAR</th>
		</thead>

@foreach ($usuario as $user)
<tr>
	<td class="text-center">{{ $user->id }}</td>
	<td>{{ $user->nombres.' '.$user->apellidos }}</td>
	<td>{{ $user->doc_identidad }}</td>
	<td>{{ $user->id }} </td>
	<td><a href="{{ route('usuarios.edit', $user->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
	<td>{!! Form::open(array('route' =>array('usuarios.destroy',$user->id),'method'=>'delete')) !!}
        {{ Form::button('Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
</div>
@endsection
{{-- URL::to('/rols/'.$roles->id.'/edit') --}}