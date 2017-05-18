@extends('layouts.master')
@section('content')
{{ Form::open(array('route' => 'roles.store', 'method' => 'POST'), array('role'=> 'form')) }}
{{ Form::label('login', 'Ingrese su Loguin') }}
		{{ Form::text('login',null, array('placeholder'=> 'Introduce su loguin', 'class' => 'form-control')) }}
		<br>
		{{ Form::button('Crear Rol', array('type'=> 'submit','class'=>'btn btn-primary')) }}
{{ Form::close()  }}
@endsection