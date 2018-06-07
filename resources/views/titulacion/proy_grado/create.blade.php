@extends('layout.master')

@section('contenido')
<div class="container">
  <div class="row">
    <!-- <div class="col-md-4 ml-auto mr-auto"> -->
    <div class="card">
        <div class="card-header card-header-primary text-center">
        <h5>REGISTRO DE ACTA</h5>
				<p class="category">MODALIDAD: {{ $modalidad->nombre_modalidad }}</p>
        </div>
        <div class="card-body">
			{!! Form::open() !!}
			<h5>Informacion del(os) Estudiante(s)</h5>
            <hr class="lineaHorizontal">
            @include('titulacion.partials.formDatosEstudiante')
            <h5>Informacion de Tesis</h5>
            <hr class="lineaHorizontal">
            @include('titulacion.partials.formInfoTesis')
            <h5>Informacion de defensa</h5>
            <hr class="lineaHorizontal">
            @include('titulacion.partials.formDefensaTesis')
            @include('titulacion.partials.formAmbiente')
    		{!! Form::close() !!}
     	</div>                           
    </div>
  </div>
</div>
@include('titulacion.partials.modals')
@endsection
