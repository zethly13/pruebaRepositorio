@extends('layout.master')
@section('contenido')
<div class="panel panel-default">
	<div class="panel-heading text-center"></div>
		<div class="panel-body">
			@include('accesos.lista')
			
		</div><!--cierre panel body-->
	</div><!--cierre panel default-->
@endsection