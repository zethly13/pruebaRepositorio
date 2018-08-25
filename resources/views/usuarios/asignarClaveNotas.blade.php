@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>ASIGNAR CLAVES PARA EL REGISTRO DE NOTAS</h5></div>
			<div class="card-body">
				<div class="row mx-auto" style="width: 1000px;" >
      		<div class="col-md-8">
						<table class="table table-sm table-hover table-condensed table-bordered">
					        <tbody>
					            <tr>
					              <th class="table-info"  WIDTH="255">DOC IDENTIDAD USR</th>
					              <td>1214</td>
					            </tr>
					            <tr>
					              <th class="table-info">NOMBRE COMPLETO USR:</th>
					              <td class="text-uppercase"></td>
					            </tr>
					            <tr>
					              <th class="table-info">ID TARJETA DE CLAVES ACTUAL:</th>
					              <td class="text-uppercase">NO TIENE NINGUNA TARJETA DE CLAVE ASIGNADA</td>
					            </tr>
					            <tr>
					              <th class="table-info">ASIGNAR NUEVA TARJETA DE CLAVES:</th>
					              <td class="text-uppercase"><input type="text" name="clave_nueva" class="form-control"></td>
					            </tr>
					        </tbody>
		        </table>
		      </div>
		      <div class="col-md-4">
        		<img src="/img/img_avatar3.png" class="img-thumbnail img-responsive img-raised" width="200" height="130">
      		</div> 
				</div>
				<br>
				<div class="text-center">
					<button class="btn btn-success"><i class="fa fa-key"></i> ASIGNAR CLAVES</button>
					<button class="btn btn-danger"><i class="fa fa-close"></i> CANCELAR TRABAJO</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
