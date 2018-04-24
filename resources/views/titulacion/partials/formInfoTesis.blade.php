<div class="form-group row">
	{!! Form::label('nombre_tesis','*Nombre Tesis:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('nombre_tesis',null,array('placeholder' => 'nombre_tesis','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('nota','Nota numeral:',['class'=>'col-md-2']) !!}
	<div class="col-md-3">
	{!! Form::text('nota',null,array('placeholder' => 'nota numeral','class'=>'form-control','size' => '30x3')) !!}
	</div>
	{!! Form::label('nota','Nota Literal:',['class'=>'col-md-2 ']) !!}
	<div class="col-md-3">
	{!! Form::text('nota',null,array('placeholder' => 'nota literal','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>
