@extends('layout.master')
@section('contenido')
<div class="container">
  <div class="row">
    <!-- <div class="col-md-4 ml-auto mr-auto"> -->
    <div class="card">
      <div class="card-header card-header-primary text-center">
        <h5>REGISTRO DE ACTA</h5>
      </div>
      <div class="card-body">
        {!! Form::open(array('route' =>array('titulacion.create'), 'method' => 'POST')) !!}
          <div class="form-group row">
            {!! Form::label('modalidades','Tipo de Modalidad:',['class'=>'col-md-2'])!!}
            <div class="col-md-4">
            {!! Form::select('modalidades',['1'=>'proyecto de grado','2'=>'Adscripcion','3'=>'Trabajo Dirigido'],1,array('class'=>'form-control'))!!}
            </div>
            {!! Form::label('cantidad','Cantidad de Estudiantes:',['class'=>'col-md-3 text-right'])!!}
            <div class="col-md-2">
            {!! form::number('cantidad',null,['class'=>'form-control']) !!}
            </div>
          </div>
          <div class="text-center">
          <a href="{{ route('titulacion.create') }}" role="button" class="btn btn-success">Crear Acta</a></td>
          </div>
    		{!! Form::close() !!}

     	</div>                           
    </div>
  </div>
</div>
@endsection
