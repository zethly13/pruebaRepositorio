@extends('layout.inicio')
@section('contenido')
<div class="panel panel-default modal-dialog centrer-block">  
  <div class="panel-heading "><center>REGISTRO</center></div>
    <div class="panel-body">
    <div class="form-horizontal">
        {{ Form::open(array('route' => 'usuarios.logear', 'method' => 'POST'), array('role'=> 'form-control')) }}
        {{ csrf_field() }}
        
     <div class="form-group">
        {{ Form::label('login', 'Ingrese su Login:',['class'=>' control-label col-sm-4']) }}
        <div class="col-sm-8">
        {{ Form::text('login',null, array('placeholder'=> 'Introduce su login', 'class' => 'form-control')) }}
        </div>
     </div>

     <div class="form-group">
        {{ Form::label('password', 'Ingrese su Password:',['class'=>'control-label col-sm-4']) }}
        <div class="col-sm-8">
        {{ Form::password('password', ['placeholder'=>'Introduce su Password','class' => 'form-control']) }}
        </div>
     </div>
    <div class="text-center">
    {{ Form::button('Ingresar', array('type'=> 'submit','class'=>'btn btn-primary')) }}
</div>
    {{ Form::close()  }}
        </div>
    </div>
  </div>

@endsection