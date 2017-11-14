@extends('layout.inicio')
@section('contenido')    
   <div class="inner-bg">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
          
          <div class="form-top">
            <div class="form-top-left">
              <h3>REGISTRO</h3>
            </div>
          
            <div class="form-top-right">
              <li class="glyphicon glyphicon-lock"></li>
            </div>
          </div>

        <div class="form-bottom">
          <div class="form-horizontal">
            {{ Form::open(array('route' => 'usuarios.logear', 'method' => 'POST'), array('role'=> 'form-control')) }}
            {{ csrf_field() }}
        
              <div class="form-group">
                {{ Form::label('login', 'Ingrese su Login:',['class'=>' control-label col-sm-5']) }}
                <div class="col-sm-7">{{ Form::text('login',null, array('placeholder'=> 'Introduce su login', 'class' => 'form-control')) }}</div>
              </div>

              <div class="form-group">
                {{ Form::label('password', 'Ingrese su Password:',['class'=>'control-label col-sm-5']) }}
                <div class="col-sm-7">{{ Form::password('password', ['placeholder'=>'Introduce su Password','class' => 'form-control']) }}</div>
              </div>
          </div>
              <div class="text-center">{{ Form::button('Ingresar', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
                {{ Form::close()  }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection