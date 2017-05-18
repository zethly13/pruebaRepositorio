@extends('layout.master')

@section('contenido')
	{{ Form::open( array('url'=> '#','role'=> 'form')) }}
		
			{{ Form::text('nombre_usuario', Input::old('username')); }}
            {{ Form::label('contraseña_usuario','Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::label('lblRememberme', 'Recordar contraseña') }}
            {{ Form::checkbox('rememberme', false) }}
            {{ Form::submit('Enviar','class'=>'btn btn-primary' )) }}

		{{ Form::button('Crear Sub Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}

	{{ Form::close() }}

@endsection