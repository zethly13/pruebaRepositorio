@extends('layout.master')
@section('contenido')

<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>LISTA DE USUARIOS EN EL SISTEMA</h5></div>
	  		<div class="card-body">
				<h3><a href="{{ URL::to('usuarios/create') }}">CREAR UN USUARIO</a></h3>
				<!--BUSCADOR DE USUARIO-->
				{!! Form::open(['route' => 'usuarios.index','method' =>'GET','class'=>'navbar-form pull-rigth']) !!}
					<div class="form-group row">
						<div class="col-sm-10">
							{!! Form::text('nombre',null,['class'=>'form-control','placehoder'=>'Buscar usuario','aria-describedby'=>'search']) !!}
						</div>
						<div class="col-sm-2">
							{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
						</div>
					</div>
				{!! Form::close() !!}
				<!--FIN DE BUSCADOR-->
				@include('errores.msjError')
	 			
	 			<ul class="pagination justify-content-center">{{ $usuario->render("pagination::bootstrap-4") }}</ul>
						
				<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg">
					<thead>
						<tr class="table-primary text-center">
							<th>Nro</th>
					        <th>NOMBRE USUARIO</th>
					        <th>DOC IDENTIDAD</th>
					        <th>PROVINCIA</th>
					        <th>VER PERFIL</th>
					        <th>MODIFICAR</th>
					        <th>ELIMINAR</th>
					  	</tr>
					</thead>
					@foreach ($usuario as $user)
					<tbody>
						<tr>
							<td class="text-center">{{ $user->id }}</td>
							<td>{{ $user->nombres.' '.$user->apellidos }}</td>
							<td>{{ $user->doc_identidad }}</td>
							<td>{{ $user->provincia->nombre_provincia }}</td>
							<td class="text-center"><a href="{{ route('usuarios.show', $user->id) }}" role="button" class="btn btn-primary btn-sm">Ver Perfil</a></td>
							<td class="text-center"><a href="{{ route('usuarios.edit', $user->id) }}" role="button" class="btn btn-success btn-sm">Modificar</a></td>
							<td class="text-center">
								{!! Form::open(array('route' =>array('usuarios.destroy',$user->id),'method'=>'delete')) !!}
			          				{{ Form::button(' Eliminar', array('type'=> 'submit','class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("¿Estas Seguro que desea eliminar el usuario?")')) }}
			          			{!! Form::close() !!}
			        		</td>
						</tr>
					</tbody>
					@endforeach
				</table>
				
				<ul class="pagination justify-content-center">{{ $usuario->render("pagination::bootstrap-4") }}</ul>
			</div>
		</div>
	</div>
</div>
@endsection