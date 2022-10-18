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


    <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    
        <div class="min-h-screen bg-gray-300 py-6 flex flex-col justify-center sm:py-12">
      <div class="py-3 sm:max-w-xl sm:mx-auto">
        <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
          <div class="px-12 py-5">
            <h2 class="text-gray-800 text-3xl font-semibold text-center">No lo canceles plis</h2>
          </div>
          <form action="/order/{{$pedido->id}}" class="formulario-cancelar"  method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="bg-gray-200 w-full flex flex-col items-center">
            <div class="flex flex-col items-center py-6 space-y-3">
              <span class="text-lg text-gray-800">¿En serio le vas a cancelar a este pequeño bebe?,<br>
                ¿que clase de persona eres?</span>
              <img src="/imagenes/Bebe.png" class="">
              <div class="flex space-x-3">
                <select class="custom-select my-1 mr-sm-2 hidden" id="inlineFormCustomSelectPref" name="estado" required >
                  
                    
                    <option selected>Cancelado</option>
                    
                  </select>
                 
              </div>
            </div>
            <div class="w-3/4 flex flex-col">
              
              <button type="submit" class="py-3 my-8 text-lg bg-gradient-to-r from-red-500 to-red-600 rounded-xl text-white">Cancelar</button>
            </div>
          </div>
          <div class="h-20 flex items-center justify-center">
            <a href="/order" class="text-gray-600">Me retracto</a>
          </div>
        </div>
    </form>
       
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (session('cancelar') == 'Oki')
	<script>
		Swal.fire(
			'Ya elimine a ese domi.',
			'Espero no se haya ido por nada malo :C.',
			'success'
			)
	</script>
@endif
    <script>

        $('.formulario-cancelar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿En serio estas seguro que lo quieres cancelar?',
            text: "¿Tan malos somos?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, ya chao',
            cancelButtonText: 'Me lo pensare'
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

</body>	    

</x-app-layout>