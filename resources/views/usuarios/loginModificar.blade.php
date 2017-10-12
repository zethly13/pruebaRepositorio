@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading text-center">FORMULARIO MODIFICAR LOGIN DE USUARIO</div>
    <div class="panel-body">
    	<div class="form-horizontal">
        {{ Form::open(array('route' =>array('usuarios.validarModLogin', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
         	<div class="form-group">
        		{!! Form::label('login', 'Login Actual:',['class'=>' control-label col-sm-4']) !!}
        		<div class="col-sm-8">
              <fieldset disabled>
                {!! Form::text('login',null, array('class' => 'form-control', 'id'=>'disabledTextInput','placeholder'=>$usuario->login)) !!}
              </fieldset>
                </div>
                </div>

                <div class="form-group">
                {!! Form::label('nuevo_login', 'Ingrese su nuevo login:',['class'=>'control-label col-sm-4']) !!}
                <div class="col-sm-7">
                {!! Form::password('nuevo_login', ['placeholder'=>'Introduce su nuevo login','class' => 'form-control']) !!}
                </div>
                <div class="col-sm-1">
                {!! form::checkbox('mostrar',null,['class'=>'form-control']) !!}
                </div>
                </div>
            </div>
          <div class="text-center">{{ Form::button('editar Login', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>

           {!! form::close() !!}     
            </div><!--cierre form-horizontal-->
        </div><!--cierre panel body-->
    </div><!--cierre panel defautl-->

@endsection