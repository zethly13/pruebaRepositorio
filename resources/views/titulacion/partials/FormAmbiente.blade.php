<h6>Informacion Ambiente</h6>
<hr>
<div class="form-group row">
	{!! Form::label('ambiente','Ambiente:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('ambiente',$ambiente,null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
	</div>
	<div class="col-md-2">
	
	<a class="btn btn-info btn-sm " href="#crearAmbiente" data-target="#crearAmbiente" data-toggle="modal"><i class="fa fa-plus"></i> nuevo Ambiente</a>      
	</div>	
	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarAmbiente" data-target="#modificarAmbiente" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar ambiente</a>
	</div>	
</div>

<div class="form-group row">
	{!! Form::label('fecha','Fecha Defensa:',['class'=>'col-md-2'])!!}
	<div class="col-md-3">
	{!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
	</div>
	{!! Form::label('hora','Hora Defensa:',['class'=>'col-md-2'])!!}
	<div class="col-md-3">
	{!! Form::datetime('hora', \Carbon\Carbon::now()->format('h:i:s A'), ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('palabraClave','Palabra clave:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('palabraClave',null,array('placeholder' => 'palabra clave','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('observaciones','observaciones:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('nombre_tesis',null,array('placeholder' => 'Ingrese la cantidad de avance que tiene el estudiante','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>

<div class="text-center">
    {!! Form::button('Crear Acta', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
</div>
