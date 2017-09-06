{!! Form::open(array('route' => array('accesos.index'), 'method' =>'get'), array('role'=>'form')) !!}
	{!! Form::label('ci','Documento de Identidad') !!}
	{!! Form::text('ci',null,array('placeholder'=>'Ingrese Doc de Identidad','class'=>'form-control')) !!}

	{!! Form::label('nombre','Nombre de Usuario') !!}
	{!! Form::text('nombre',null,array('placeholder'=>'Nombre de Usuario','class'=>'form-control')) !!}
	{!! Form::label('apellido','Apellidos de Usuario') !!}
	{!! Form::text('apellido',null,array('placeholder'=>'Apellidos de Usuario','class'=>'form-control')) !!}<br>
	
	{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
{!! Form::close() !!}