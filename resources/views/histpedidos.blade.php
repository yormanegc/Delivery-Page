<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bicibike') }}
        </h2>
    </x-slot> -->
    <html lang="es">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/stilo.css/" rel="stylesheet">
	

	<link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
<div>
</div>
      <div class="container w-full md:w-6/8 xl:w-6/8  mx-auto px-2" style=" padding-top: 1em;">
      		 
			
			
			
		
			 
		<div class="card">
			<div class="card-body">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
            				<th scope="col" data-priority="0">Nombre</th>
							<th scope="col" data-priority="1">Tipo</th>
							<th scope="col" data-priority="2">Cedula</th>
							<th scope="col" data-priority="3">Direccion de entrega</th>
							<th scope="col" data-priority="4">Direccion de retiro</th>
							<th scope="col" data-priority="5" >Numerotel</th>
              				<th scope="col" data-priority="6">Estado</th>
              				<th scope="col" data-priority="7">Acciones</th>
							
							  
              
						</tr>
					</thead>
					<tbody>
						<tr>@foreach($pedidohist as $pedidohist)
            
							<td>{{$pedidohist->nombreap}}</td>
							<td >{{$pedidohist->tipo}}</td>
							<td>{{$pedidohist->cedula}}</td>
							<td class=" md:w-2/2 xl:w-2/2">{{$pedidohist->direcciondeen}}</td>
							<td class=" md:w-2/2 xl:w-2/2">{{$pedidohist->direccionderetiro}}</td>
							<td>{{$pedidohist->numerotel}}</td>
							@if ($pedidohist->estado == "En proceso")
							<td style="color: green">{{$pedidohist->estado}}</td>
							@elseif($pedidohist->estado == "Cancelado")
							<td style="color: red">{{$pedidohist->estado}}</td>
							@elseif($pedidohist->estado == "Finalizado")
							<td style="color: blue">{{$pedidohist->estado}}</td>
							
							@endif
              <td><br>
				@if ($pedidohist->estado == 'Cancelado' || $pedidohist->estado == 'Finalizado' )
					
				
              <div class="mb-4 ml-4">
				<a href="/point/{{$pedidohist->id}}/edit" class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-yellow-400 hover:bg-yellow-600 hover:shadow-lg " ><i class="fas fa-star"></i></a>
			</div>

			 
			@elseif($pedidohist->estado == 'En proceso')
			<div class="mb-4 ml-4">
				<a href="/point/{{$pedidohist->id}}/edit" class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-yellow-400 hover:bg-yellow-600 hover:shadow-lg " ><i class="fas fa-star"></i></a>
				<a href="/order/{{$pedidohist->id}}/edit" class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-red-400 hover:bg-red-600 hover:shadow-lg " ><i class="fas fa-ban"></i></a>
			</div>
			@endif
    </form>
              
            </td>
				</tr>
						@endforeach
						
						</tbody>
					</table>
				
				</div>
			</div>
      
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
	<!--Datatables -->
	
	
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	@if (session('crear') == 'Oki')
		<script>
			Swal.fire({
	title: 'Recuerda dejarnos la puntuacion de tu pedido en la estrellita.',
	imageUrl: '/imagenes/Ana.jpg',
	width: 600,
	padding: '3em',
	background: '',
	backdrop: `
	  rgba(255,164,032,0.4)
	  
	  
	`
  })
		</script>
	@endif

	@if (session('cancelar') == 'Oki')
		<script>
			Swal.fire(
				'El pedido se ha cancelado.',
				'Espero no te arrepientas de esto.',
				'success'
				)
		</script>
	@endif

	@if (session('eliminar') == 'Ok')
		<script>
			Swal.fire(
				'Eliminado Crack!.',
				'El pedido se elimino asi de rapido como tu ex te elimino de su vida.',
				'success'
				)
		</script>
	@endif
	<script>

		$('.formulario-eliminar').submit(function(e){
			e.preventDefault();
			Swal.fire({
			title: '¿Estas seguro?',
			text: "No podras revertir esto.",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, borralo',
			cancelButtonText: 'Peldon, me arrepenti'
			}).then((result) => {
			if (result.isConfirmed) {
				// Swal.fire(
				// 'Deleted!',
				// 'Your file has been deleted.',
				// 'success'
				// )
				this.submit();
			}
			})
		});
	
	</script>


<script> console.log('Hi!'); </script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>



<script>
	$(document).ready(function() {
$('#example').DataTable({
	responsive : true,
	autowidth : false,

	"language": {
            "lengthMenu": "Muestrame _MENU_ registros por pagina",
            "zeroRecords": "No encontre nada - Perdon",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
			"search": "Buscar:",
			"paginate":{
				"next": "Siguiente",
				"previous": "Anterior"
			}        }

}
);
} );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
   </body>


            </body>


			
            </x-app-layout>