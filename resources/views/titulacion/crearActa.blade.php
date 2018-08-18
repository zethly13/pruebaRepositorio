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
        {!! Form::open(array('route' =>array('titulacion.crear'), 'method' => 'post')) !!}
          <div class="form-group row">
            {!! Form::label('modalidades','Tipo de Modalidad:',['class'=>'col-md-2'])!!}
            <div class="col-md-4">
           {{ Form::select('modalidades', $modalidades,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control','id'=>'modalidades']) }}
            </div>
          </div>
          <div class="text-center">
          {{ Form::button('Crear Acta', array('type'=> 'submit','class'=>'btn btn-primary','id'=>'btn_modalidad')) }}
          </div>
    		{!! Form::close() !!}

     	</div>                           
    </div>
  </div>
</div>
<div class="container" id="modalidad" >hols
</div>
@endsection
{{-- @section('script') --}}


{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script>
  $(document).ready(function(){
    $('#btn_modalidad').click(function(event) {
      var id=$('#modalidades').val();
      if(id!='')
      {
        $('#modalidad').innerhtml("/prueba.blade.php");
        $('#modalidad').show(400);
        console.log(id);
      }else
      $('#modalidad').hide(400);
    });
  });
</script>
{{-- @endsection --}}