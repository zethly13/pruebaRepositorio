<div class="form-group row">
	{!! Form::label('presidente','Presidente:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('presidente',$funcionPresidentes->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>

	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#CrearPre" data-target="#crearPre" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarPre" data-target="#modificarPre" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('miembro1','Miembro 1:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro1',$funcionMiembro->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi1" data-target="#crearMi1" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>	
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi1" data-target="#modificarMi1" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('miembro2','Miembro 2:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro2',$funcionMiembro->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi1" data-target="#crearMi1" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi2" data-target="#modificarMi2" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>

<div class="form-group row">
	{!! Form::label('miembro3','Miembro 3:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro3',$funcionMiembro->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi1" data-target="#crearMi1" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi3" data-target="#modificarMi3" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('tutor','Tutor:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('tutor',$funcionTutor->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearTutor" data-target="#crearTutor" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarTutor" data-target="#modificarTutor" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>

<div class="form-group row">
	{!! Form::label('decano','Decano:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('decano',$funcionDecano->pluck('nombre_completo_user','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearDecano" data-target="#crearDecano" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarDecano" data-target="#modificarDecano" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
</div>



{{-- modales --}}

