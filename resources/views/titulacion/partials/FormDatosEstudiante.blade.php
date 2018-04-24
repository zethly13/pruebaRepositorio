<div class="form-group row">
	{!! Form::label('codSis','* Cod Sis:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('codSis',null,array('placeholder' => 'Ingrese codigo sis', 'class'=>'form-control')) !!}
	</div>
	<a class="btn btn-secondary btn-sm" href="#"><i class="fa fa-pencil"></i>  Buscar Estudinte</a>
</div>

<div class="form-group row">
	{!! Form::label('nombre','* Nombres:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('nombre',null,array('placeholder' => 'Ingrese su nombre', 'class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('apellido','* Apellidos:', ['class'=>'col-md-2']) !!}
	<div class="col-md-5">
	{!! Form::text('apellido',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('carrera','* carrera:', ['class'=>'col-md-2']) !!}
	<div class="col-md-5">
	{!! Form::text('carrera',null,array('placeholder' => 'Ingrese su carrera','class'=>'form-control')) !!}
	</div>
</div>