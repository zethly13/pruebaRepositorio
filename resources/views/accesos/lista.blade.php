{!! Form::open(array('route' => array('accesos.index2'), 'method' =>'get'), array('role'=>'form')) !!}
	<form>
		<div class="form-group row">
			{!! Form::label('ci','Documento de Identidad:',['class'=>'col-md-3']) !!}
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
	</form>
{!! Form::close() !!}
<br>