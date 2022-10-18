@extends('adminlte::page')

@section('title', 'Administrador')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
@stop

@section('content_header')
    
@stop

@section('content')

    
                
                <form action="/history/{{$pedido->id}}" class=""  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="domiasi">
                  <option selected>Elige el domiciliario...</option>
                  @foreach($domiciliario as $domiciliario)
                  
                  <option>{{$domiciliario->nombre}}</option>
                  @endforeach
                </select>

                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="estado" >
                  
                  <option selected>En proceso</option>
                  <option selected>Finalizado</option>
                  <option selected>Cancelado</option>
                  <option selected>Elige el estado del pedido...</option>
                </select>  
                
                <div class="px-4 py-3  text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 h-8 w-24">
                    <i class="fas fa-check"></i>
                  </button>
                  <br>

                </form>
            </div>
        </div>
    </div>
</body>

@stop



@section('js')
    <script> console.log('Hi!'); </script>
	
@stop


            