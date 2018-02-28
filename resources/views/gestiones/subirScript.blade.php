@extends('layout.master')
{{-- @section('style') --}}
	{{-- {!! Html::style('css/dropzone.css') !!} --}}
{{-- @endsection --}}
@section('contenido')
	<h1><center>SUBIR SCRIPT CSV</center></h1>
	{{ Form::open(array('url'=>'upload/','method' => 'post','enctype'=>'multipart/form-data'
)) }}

{{ Form::file('archivo') }}
<br>
{{ csrf_field()}}
<br>
{{ Form::submit('subir') }}

{{-- {{ Form::close()}} --}}

@endsection
