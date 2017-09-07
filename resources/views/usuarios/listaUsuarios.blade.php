@extends('layout.master')
@section('contenido')
<h1><center>LISTA DE USUARIOS</center></h1>
<h3><a href="{{ URL::to('usuarios/create') }}">CREAR UN USUARIO</a></h3>
<div class="panel panel-default">  
<div class="panel-heading text-center">LISTA DE USUARIOS</div>
<!--BUSCADOR DE USUARIO-->
{!! Form::open(['route' => 'usuarios.index','method' =>'GET','class'=>'navbar-form pull-rigth']) !!}
	<div class="input-group">
		{!! Form::text('nombre',null,['class'=>'form-control','placehoder'=>'Buscar usuario','aria-describedby'=>'search']) !!}
		{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
	</div>
	{!! Form::close() !!}
<!--FIN DE BUSCADOR-->

<div class="table-responsive container-fluid">
 <center>{{ $usuario->links() }}</center>
	<table  class="table table-condensed table-striped table-bordered">
		<thead>
			<th class="text-center">Nro</th>
        	<th class="text-center">NOMBRE USUARIO</th>
        	<th class="text-center">DOC IDENTIDAD</th>
        	<th class="text-center">provincia</th>
        	<th class="text-center">MODIFICAR</th>
        	<th class="text-center">ELIMINAR</th>
		</thead>

@foreach ($usuario as $user)
<tr>
	<td class="text-center">{{ $user->id }}</td>
	<td>{{ $user->nombres.' '.$user->apellidos }}</td>
	<td>{{ $user->doc_identidad }}</td>
	<td>{{ $user->provincia->nombre_provincia }}</td>
	<td class="text-center"><a href="{{ route('usuarios.edit', $user->id) }}" type="button" class="btn btn-success glyphicon glyphicon-edit">Modificar</a></td>
	
	<td class="text-center">{!! Form::open(array('route' =>array('usuarios.destroy',$user->id),'method'=>'delete')) !!}
        

          {{ Form::button(' Eliminar', array('type'=> 'submit','class'=>'btn btn-danger glyphicon glyphicon-trash')) }}
                        {!! Form::close() !!}</td>
</tr>
@endforeach
</table>
</div>
</div><!--cierre panel body-->
</div><!--cierre panel default-->
@endsection

{{-- URL::to('/rols/'.$roles->id.'/edit') --}}