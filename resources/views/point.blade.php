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
    
        <div class="min-h-screen bg-gray-300 py-6 flex flex-col justify-center sm:py-12">
      <div class="py-3 sm:max-w-xl sm:mx-auto">
        <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
          <div class="px-12 py-5">
            <h2 class="text-gray-800 text-3xl font-semibold">Tu opinion nos importa</h2>
          </div>
          <form action="/point/{{$pedido->id}}" class=""  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="bg-gray-200 w-full flex flex-col items-center">
            <div class="flex flex-col items-center py-6 space-y-3">
              <span class="text-lg text-gray-800">¿Que tan bueno fue el servicio?</span>
              <div class="flex space-x-3">
                 <fieldset class="flex space-x-3">
                <label>
                    <p>1</p>
                    <input  type="radio" title="1" name="puntuacion" value="1">
                    
                    
                </label>
                
                <label>
                    <p>2</p>
                    <input type="radio" title="2" name="puntuacion" value="2">
                    
                </label>
                
                <label>
                    <p>3</p>
                    <input type="radio" title="3" name="puntuacion" value="3">
                    
                </label>
                
                <label>
                    <p>4</p>
                    <input type="radio" title="4" name="puntuacion" value="4">
                    
                </label>
                
                <label>
                    <p>5</p>
                    <input type="radio" title="5" name="puntuacion" value="5">
                    
                </label>
            </fieldset> 
              </div>
            </div>
            <div class="w-3/4 flex flex-col">
              <textarea rows="3" class="p-4 text-gray-500 rounded-xl resize-none" name="comentario" required>Deja el mensaje que quieras.</textarea>
              <button type="submit" class="py-3 my-8 text-lg bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl text-white">Calificar ahora</button>
            </div>
          </div>
          <div class="h-20 flex items-center justify-center">
            <a href="/order" class="text-gray-600">Quizas luego</a>
          </div>
        </div>
    </form>
       
      </div>
    </div>
    
      
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
	<!--Datatables -->
	
	
	


	


<script> console.log('Hi!'); </script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
   </body>


            </body>


			
            </x-app-layout>