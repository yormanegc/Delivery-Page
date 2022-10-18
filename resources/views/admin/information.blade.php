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
                      <th scope="col">id del pedido</th>
                      <th scope="col">Comentario</th>
                      <th scope="col">Puntuacion</th>
                      <th scope="col">Accion</th>
                      
                  </tr>
              </thead>
              <tbody>
                   <tr>@foreach($point as $point)
                  
                      <td>{{$point->pedido_id}}</td>
                      <td>{{$point->comentario}}</td>
                      <td>{{$point->puntuacion}}</td>
                      <td class="text-center"><br>
                        <form action="{{ route ('point.destroy' , $point->id)}}" method="POST" class="formulario-eliminar">
                          
                          
              <button class="focus:outline-none mb-4 text-center text-white text-sm py-2.5 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg " type="submit"  >
                  <i class="fas fa-trash"></i>
              </button>
              @csrf
              @method('DELETE')
              </form>
                        
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
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