@extends('layout.master')

@section('contenido')
<div class="container-fluid">
  <div class="row">
    <!-- <div class="col-md-4 ml-auto mr-auto"> -->
    <div class="card">
      <div class="card-header card-header-primary text-center">
        <h5>REGISTRO DE ACTA</h5>
				<p class="category">Modalidad: Proyecto de grado</p>
      </div>
      <div class="card-body">
				{!! Form::open() !!}
						@include('titulacion.partials.formDatosEstudiante')
            <hr>
            @include('titulacion.partials.formInfoTesis')
            <hr>
	      		@include('titulacion.partials.formDefensaTesis')
    		{!! Form::close() !!}

     	</div>                           
    </div>
  </div>
</div>

@endsection
