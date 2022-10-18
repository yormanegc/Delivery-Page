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

@stop

@section('content')

<div class="card">
  <div class="card-body">
  	<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Tipo</th>
					<th scope="col">Cedula</th>
					<th scope="col">Direccion de entrega</th>
					<th scope="col">Direccion de retiro</th>
					<th scope="col">Numero tel</th>
				
					
					<th scope="col">Estado</th>
					
					<th scope="col">Domiciliario</th>

					
					
					<th scope="col">Accion</th>
					<th scope="col">Fecha</th>
				</tr>
			</thead>
			<tbody>
				<tr>@foreach($pedidohist as $pedidohist)
				
					<td>{{$pedidohist->id}}</td>
					<td>{{$pedidohist->nombreap}}</td>
					<td>{{$pedidohist->tipo}}</td>
					<td>{{$pedidohist->cedula}}</td>
					<td>{{$pedidohist->direcciondeen}}</td>
					
					<td>{{$pedidohist->direccionderetiro}}</td>
					<td>{{$pedidohist->numerotel}}</td>
					@if ($pedidohist->estado == "En proceso")
					<td class="text-green">{{$pedidohist->estado}}</td>
					@elseif($pedidohist->estado == "Cancelado")
					<td class="text-red">{{$pedidohist->estado}}</td>
					@elseif($pedidohist->estado == "Finalizado")
					<td class="text-blue">{{$pedidohist->estado}}</td>
					@endif
					
					
					<td>{{$pedidohist->domiasi}}</td>
					
					
			  <td><br>
				@can('history.destroy')
                    <form action="{{ route ('history.destroy' , $pedidohist->id)}}" method="POST">
                        <button class="focus:outline-none text-center text-white text-sm py-2.5 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg mb-2" type="submit"  >
                            <i class="fas fa-trash"></i>
                        </button>
						

						<a href="/history/{{$pedidohist->id}}/edit" class="focus:outline-none text-white text-sm py-2.5 px-4 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg " ><i class="fas fa-users"></i></a><br>
						
                             @csrf
                            @method('DELETE')
					</form>
					@endcan
              
             </td>
			 <td>{{$pedidohist->created_at}}</td>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
@stop
   