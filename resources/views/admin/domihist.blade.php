@extends('adminlte::page')

@section('title', 'Administrador')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	
@stop

@section('content_header')
@can('delivery.create')
<a href="delivery/create" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg"><i class="fas fa-user-plus"></i>
	</a>
@endcan
@stop

@section('content')

<div class="card">
  <div class="card-body">
  	<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th scope="col">Domi</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Cedula</th>
					<th scope="col">Numero de telefono</th>
					<th scope="col">Direccion</th>
					<th scope="col">Sexo</th>
					<th scope="col">Accion</th>
				</tr>
			</thead>
			<tbody>
				<tr>@foreach($domihist as $domihist)
				<td class="px-4 py-3"><img  
					class="h-18 w-20    "
					src="/storage/{{$domihist->img}}"
					alt=""
					/></td>
					<td>{{$domihist->nombre}}</td>
					<td>{{$domihist->apellido}}</td>
					<td>{{$domihist->cedula}}</td>
					<td>{{$domihist->numerotelle}}</td>
					<td>{{$domihist->direccion}}</td>
					<td>{{$domihist->sexo}}</td>
					<td>
						@can('delivery.destroy')	
					<form action="{{ route ('delivery.destroy' , $domihist->id)}}" method="POST" class="formulario-eliminar">
					<a href="/delivery/{{$domihist->id}}/edit" class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg " ><i class="fas fa-edit"></i></a><br>
					<br>
					<button class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg" type="submit"><i class="fas fa-trash"></i>
						</button>
					@csrf
					@method('DELETE')
				
					</form>
					@endcan
					</td>
				</tr>
				@endforeach
				</tbody>
			
		</table>

		</div>
</div>
@stop



@section('js')
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('eliminar') == 'Ok')
	<script>
		Swal.fire(
			'Ya elimine a ese domi.',
			'Espero no se haya ido por nada malo :C.',
			'success'
			)
	</script>
@endif
<script>

	$('.formulario-eliminar').submit(function(e){
		e.preventDefault();
		Swal.fire({
		title: '¿Seguro que lo quieres eliminar?',
		text: "¿Asi de feo es?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'No eres tu, soy yo',
		cancelButtonText: 'Es jugando'
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>

@stop
   