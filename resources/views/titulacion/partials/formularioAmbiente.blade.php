<div class="form-group row">
	{!! Form::label('nombreAmbiente','*Nombre del ambiente:', ['class'=>'col-md-3']) !!}
	<div class="col-md-9">
	{!! Form::text('nombreAmbiente',null,array('placeholder' => 'nombre ambiente','class'=>'form-control')) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('tipoAmbiente','Tipo Ambiente:',['class'=>'col-md-3']) !!}
	<div class="col-md-9">
	{!! Form::select('tipoAmbiente', $tipo_ambiente,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('unidad','Unidad:',['class'=>'col-md-3 ']) !!}
	<div class="col-md-4">
	{!! Form::select('unidad', $unidad,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
	</div>
	{!! Form::label('cantEstudiantes','Max estudiantes:',['class'=>'col-md-3 text-right']) !!}
	<div class="col-md-2">
	{!! Form::number('cantEstudiantes',null,array('class'=>'form-control')) !!}
	</div>
	
</div>
