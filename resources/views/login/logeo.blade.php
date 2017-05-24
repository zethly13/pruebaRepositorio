@extends('layout.master')

@section('contenido')
	{{ Form::open(array('AutenticacionController@validar', 'method'=>'POST'), array('role'=> 'form')) }}
	{{ csrf_field() }}
	{{-- Form::open(array('route' =>array('autenticacion.index','rol_seleccionado'), 'method' => 'POST'), array('role'=> 'form')) --}}
		{{ Form::label('login','login') }}
		{{ Form::text('nombre_usuario') }}
        {{ Form::label('contraseña_usuario','Contraseña') }}
        {{ Form::password('password') }}
        {{-- Form::label('lblRememberme', 'Recordar contraseña') }}
        {{ Form::checkbox('rememberme', false) --}}
        {{ Form::submit('Enviar',array('class'=>'btn btn-primary')) }}
	{{ Form::close() }}

@endsection