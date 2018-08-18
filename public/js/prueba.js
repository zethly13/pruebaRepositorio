// $(document).ready(function(){
// 	var mytable=$("#mytable")
// })


$(document).ready(function(){
		// $(document).on('click','#buscarEst',function(event){
		// 	$('#listaUsuarios').show(400);
		// 	var seleccion=$(this).val();
		// 	console.log(seleccion);
		// });
		// var usuarios=[]

		$(document).on('click','#buscar',function(event){
			var seleccion=$(this).val();
			$('#listaUsuarios').hide(400);
			$('#ci').val('');
			$('#nombre').val('');
			$('#apellido').val('');
		});
		$('#buscarEst').click(function(event) {
			$('#listaUsuarios').show(400);
			var ci=$('#ci').val();
			var nombre=$('#nombre').val();
			var apellido=$('#apellido').val();
			$.ajax({
				type: 'POST',
				url: '/titulacion/buscar/',
				data: {'ci':ci,'nombre':nombre,'apellido':apellido,'_token': $('input[name=_token]').val()},
				success : function(data){
					usuarios='<table class="table table-sm table-condensed table-striped table-bordered"><thead><tr class="text-center table-info"><td>COD SIS</td><td>NOMBRE COMPLETO</td><td>CARRERA</td><td>ACCION</td></tr></thead><tbody>';
					for(var i=0;i<data.length;i++){
						usuarios+='<tr>'+
						'<td>'+data[i].cod_sis+'</td>'+
						'<td>'+data[i].nombres+" "+data[i].apellidos+'</td>'+
						'<td>'+data[i].nombre_plan+'</td>'+
						'<td><button class="btn btn-success glyphicon glyphicon-edit" data-dismiss="modal" onclick="agregarEst('+data[i].id_usuario_asignar_sub_rol+')">AGREGAR</button></td>'+
						'</tr>';
					}
					// console.log(data);
	  			// });
	  			usuarios+='</tbody></table>';
	  			$('#listaUsuarios').html(usuarios);
	  		}
	  	});
		});
	});
	function agregarEst(id){
		$('#mostrarUsuario').show(400);
		var id_usuario_asignar_sub_rol=id;
		$.ajax({
			type:'POST',
			url:'/titulacion/buscarUsuario/',
			data:{'id':id,'_token': $('input[name=_token]').val()},
			success:function(data){
				$('#mostrarUsuario').append("<tr>"+
					"<td>Cod sis</td>"+
					"<td >"+data[0].cod_sis+"</td>"+
					"<td value="+data[0].id+">"+data[0].id+"</td>"+
					"</tr>");
				//$('#nombreUsuario').append("<input value='"+data[0].cod_sis+"'>"+data[0].cod_sis+"")
			}
			// console.log(usuarios);
		});


		// post('buscarUsuario',{'id':id_usuario_asignar_sub_rol},function(data){
			// console.log(data);
		// });
		// var id=$('#idUsuario').val();
		// var text=$('#idUsuario').text();
		// console.log(text);
		
	}
	// function search_sis(){
	// 	// cod_sis = document.getElementById("search_sis").value;
	// 	// $.get('search/'+cod_sis, function(data, status){
	// 	// var array=new Array(data);
	// 	// var contador;
	// 	// console.log(array);

 //    // });

	// }