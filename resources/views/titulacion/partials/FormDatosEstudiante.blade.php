<div class="form-group row">
	{!! Form::label('codSis','* Cod Sis:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('codSis',null,array('placeholder' => 'Ingrese codigo sis', 'class'=>'form-control')) !!}
	</div>

	<a class="btn btn-secondary btn-sm" href="#buscarEstudiante" data-target="#buscarEst" data-toggle="modal"><i class="fa fa-pencil"></i>  Buscar Estudinte</a>
	<div class="modal fade" id="buscarEst">
    <div class="modal-dialog modal-lg">
      	<div class="modal-content">
        	<div class="modal-header">
          		<h2 class="modal-title">Buscar Estudiante</h2>
           		<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        	</div>         
        	<div class="modal-body">

          		{!! Form::open() !!}
						<div class="form-group row">
							{!! Form::label('codSis','Cod Sis:',['class'=>'col-md-3']) !!}
							<div class="col-md-9">
							{!! Form::text('ci',null,array('placeholder'=>'Ingrese Doc de Identidad','class'=>'form-control')) !!}
							</div>
						</div>
		
						<div class="form-group row">
							{!! Form::label('nombre','Nombre de Usuario:',['class'=>'col-md-3']) !!}
							<div class="col-md-9">
							{!! Form::text('nombre',null,array('placeholder'=>'Nombre de Usuario','class'=>'form-control')) !!}
							</div>
						</div>
						
						<div class="form-group row">
							{!! Form::label('apellido','Apellidos de Usuario:',['class'=>'col-md-3']) !!}
							<div class="col-md-9">{!! Form::text('apellido',null,array('placeholder'=>'Apellidos de Usuario','class'=>'form-control')) !!}
							</div>
						</div>
						<div class="text-center">
							{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
						</div>
				{!! Form::close() !!}

        	</div>
        	<div class="modal-footer">
        	{{ Form::open() }}
            	{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            	{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        	</div>            
      	</div>              
    </div> 
    	{{ Form::close() }}         
  	</div>
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