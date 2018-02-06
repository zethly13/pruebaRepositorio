@extends('layout.master')
@section('contenido')
@include('errores.msjError')
<h1>
	<center>NUEVA GESTION</center>
</h1>
{!! Form::open(['route'=>'gestiones.store','method'=>'POST'],array('role'=>'form')) !!}
{!! csrf_field() !!}
{!! Form::label('anio','*Año:',['class'=>'col-md-3']) !!}
{!! Form::select('anio',array(date('Y')=>date('Y'),date('Y')+1=>date('Y')+1,date('Y')+2=>date('Y')+2)) !!}
{!! Form::label('periodo','*Periodo:',['class'=>'col-md-3']) !!}
{!! Form::select('periodo',array('1'=>'1','2'=>'2')) !!}
<br>
{!! Form::label('tipo_gestion','*Tipo Gestion:',['class'=>'col-md-3']) !!}
{!! Form::select('tipo_gestion',$tipo_gestiones->pluck('nombre_tipo_gestion','id'),null,['placeholder'=>'Seleccione','required' => 'required']) !!}
<br>
{!! Form::label('fecha-inicio','*Fecha Inicio Gestion:',['class'=>'col-md-3']) !!}
{!! Form::text('fecha_inicio','',array('placeholder'=>'Fecha Inicio Gestion','required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
<br>
{!! Form::label('fecha_fin','*Fecha Fin Gestion:',['class'=>'col-md-3']) !!}
{{-- {!! Form::text('fecha-f','',array('id'=>'fecha-fin','placeholder'=>'Fecha Fin Gestion','required'=>'required')) !!} --}}
{!! Form::text('fecha_fin','', array('placeholder'=>'Fecha Fin Gestion','id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
<br>
{!! Form::label('habilitar_plan','*HABILITAR PLAN:',['class'=>'col-md-3']) !!}
<table class="table table-striped table-bordered table-hover table-condensed">
	<tr class="table-info">
		<th class="table-info">Nro</th>
		<th class="table-info">Cod PLAN</th>
		<th class="table-info">PLAN</th>
		<th class="table-info">Habilitar Plan</th>
		@foreach($planes as $key=>$plan)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $plan->cod_plan }}</td>
			<td>{{ $plan->nombre_plan }}</td>
			<td>{!! Form::checkbox('plan[]',$plan->id) !!}</td>
		</tr>
		@endforeach 
	</table>
	 <div class="text-center">
          {!! Form::button('Registrar Gestion', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
        </div> 
	{!! Form::close() !!}

@endsection

