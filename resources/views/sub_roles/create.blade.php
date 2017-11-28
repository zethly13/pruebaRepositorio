@extends('layout.master')

@section('contenido')
<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>CREAR NUEVO SUB-ROLES</strong></div>
  <div class="card-body">
	<h2><a href="{{ URL::to('sub_roles') }}">listar sub rol</a></h2></br>
	{{ Form::open(array('route' =>array('sub_roles.store','rol_seleccionado'), 'method' => 'POST'), array('role'=> 'form')) }}
		{{-- ingresar token ejemplo; input type="hidden" name="_token" value="{{ csrf_token() }}" --}}
		<form>
			<div class="form-group row">
				{{ Form::label('nombre_rol', 'Seleccione Rol:',['class'=>'col-md-3']) }}
				<div class="col-md-9">
					<select name="rol_seleccionado" class="form-control">
						<option value='-1'>Seleccione</option>	
						@foreach ($rol as $roles)
							<option value="{{$roles->id}}">{{$roles->nombre_rol}}</option>
						@endforeach	
					</select>
				</div>
			</div>
			<hr>
			
			<div class="form-group row">
				{{ Form::label('nombre_sub_rol', 'Nombre del Nuevo Sub-Rol',['class'=>'col-md-3']) }}
				<div class="col-md-9">
					{{ Form::text('nombre_sub_rol',null, array('placeholder'=> 'Introduce el nuevo Sub Rol', 'class' => 'form-control')) }}
				</div>
			</div>
			<div class="form-group row">
				{{ Form::label('desc_sub_rol', 'Descripcion del Sub-Rol',['class'=>'col-md-3']) }}
				<div class="col-md-9">
					{{ Form::text('desc_sub_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Sub-Rol', 'class' => 'form-control')) }}
				</div>
			</div>

			<h2><center>LISTA DE PERMISOS A ASIGNAR</center></h2></br>
			@include('accesos.prueba')      
			<div class="text-center">
				{{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}
			</div>    
		{{ Form::close() }}
		</form>
	</div><!--cierre card body-->
</div><!--cierre card-->

@endsection