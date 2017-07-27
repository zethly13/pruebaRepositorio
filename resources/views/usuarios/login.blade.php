@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading "><center>REGISTRO</center></div>
    <div class="panel-body"> 
{{ Form::open(array('route' => 'usuarios.logear', 'method' => 'POST'), array('role'=> 'form')) }}
     {!! csrf_field() !!}

    {{ Form::label('login', 'Ingrese su Login') }}
    {{ Form::text('login',null, array('placeholder'=> 'Introduce su login', 'class' => 'form-control')) }}
    <br>
    {{ Form::label('password', 'Ingrese su Password') }}
    {{ Form::password('password', ['placeholder'=>'Introduce su Password','class' => 'form-control']) }}
    <br>
    {{ Form::button('Ingresar', array('type'=> 'submit','class'=>'btn btn-primary')) }}
{{ Form::close()  }}
</div>
</div>
@endsection