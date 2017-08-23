{!! Form::open(array('route' => array('usuarios.store'), 'method' =>'POST'), array('role'=>'form')) !!}
	{!! Form::label('ci','Documento de Identidad') !!}
	{!! Form::text('ci',@yield('ci'),array('placeholder'=>'Ingrese Doc de Identidad','class'=>'form-control')) !!}

	{!! Form::label('nombre','Nombre de Usuario') !!}
	{!! Form::text('nombre',@yield('nombre'),array('placeholder'=>'Nombre de Usuario','class'=>'form-control')) !!}<br>
	{!! Form::button('Buscar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
{!! Form::close() !!}