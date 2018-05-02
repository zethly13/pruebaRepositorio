<h6>Informacion Ambiente</h6>
<hr>
<div class="form-group row">
	{!! Form::label('ambiente','Ambiente:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('ambiente',['1'=>'salon 1','2'=>'aula 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearAmbiente" data-target="#crearAmbiente" data-toggle="modal"><i class="fa fa-user"></i> nuevo Ambiente</a>
	</div>
		<div class="modal fade" id="crearAmbiente">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Nuevo Ambiente</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
       	 		<div class="modal-body">
          			{!! Form::open() !!}
             		@include('titulacion.partials.formularioAmbiente')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
     	 	</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarAmbiente" data-target="#modificarAmbiente" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar ambiente</a>
	</div>
		<div class="modal fade" id="modificarAmbiente">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Ambiente</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
             		@include('titulacion.partials.formularioAmbiente')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
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


