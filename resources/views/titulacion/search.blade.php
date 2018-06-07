@extends('layout.master')
@section('contenido')

<div class="card border-info mb-2">
  <div class="card-header text-center text-muted"><strong>BUSCADOR DE USUARIOS EN EL SISTEMA</strong></div>
<div class="card-body">
  	<div class="form-group row">
		{!! Form::label('codSis','Cod Sis:',['class'=>'col-md-3']) !!}
		<div class="col-md-9">
			<input type="text" class="form-control" id="search" name="search"></input>			
		</div>
	</div>

		<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg">
			<thead>
				<tr class="table-primary text-center">
					<th>Nro</th>
	        		<th>NOMBRE USUARIO</th>
	        		<th>DOC IDENTIDAD</th>
	        		<th>PROVINCIA</th>
	        		<th>AGREGAR</th>
      			</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center"></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-center">
						{{-- <a href="#" role="button" class="btn btn-primary btn-sm">CLICK</a> --}}
					</td>
				</tr>
			</tbody>

		</table>
	</div>
@endsection

