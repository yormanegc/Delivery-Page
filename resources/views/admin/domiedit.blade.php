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

    
                
                <form action="/delivery/{{$domiciliario->id}}" class=""  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 
                
                
                            
                            <div class="mt-2 sm:mt-0 md:content-around ">
                                <div class="">
                                  
                                  <div class="mt-2 md:mt-0 md:col-span-2">
                                    
                                      <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                          <div class="grid grid-cols-6 gap-6">
                                            
                                            <div class="col-span-6 sm:col-span-3">
                                              <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                              <input type="text"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-400 shadow-sm sm:text-sm border-gray-300 rounded-md" name="nombre" value="{{$domiciliario->nombre}}" required>
                                            </div>
                              
                                            <div class="col-span-6 sm:col-span-3">
                                              <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
                                              <input type="text"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-400 shadow-sm sm:text-sm border-gray-300 rounded-md" name="apellido" value="{{$domiciliario->apellido}}" required>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Cedula</label>
                                                <input type="text"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-400 shadow-sm sm:text-sm border-gray-300 rounded-md" name="cedula" value="{{$domiciliario->cedula}}" required>
                                              </div>
                              
                                            <div class="col-span-6 sm:col-span-4">
                                              <label for="email_address" class="block text-sm font-medium text-gray-700">Numero de telefono</label>
                                              <input type="text"    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-200 shadow-sm sm:text-sm border-gray-300 rounded-md" name="numerotelle" value="{{$domiciliario->numerotelle}}" required>
                                            </div>
                              
                                            
                              
                                            <div class="col-span-6">
                                              <label for="street_address" class="block text-sm font-medium text-gray-700">Direccion</label>
                                              <textarea class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' placeholder='Especificame bien la direccion de este domi.' name="direccion" value="{{$domiciliario->direccion}}" required></textarea>
                                            </div>
                        
                                            
                                            @can('delivery.edit')
                                            
                                        <div class="px-4 py-3  text-right sm:px-6">
                                          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 h-8 w-24">
                                            <i class="fas fa-check"></i>
                                          </button>
                                          <br>
                                          
                                        </div>
                                        
                                        <div class="px-4 py-3  text-right sm:px-8 ml-8">
                                            <button class="focus:outline-none text-white text-sm  rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg h-8 w-24" type="button"><a href="/delivery"><i class="fas fa-ban"></i></a></button>
                                              </button>
                                        </div>
                                      </div>

                                      @endcan  
                                
                  
                        
                </form>
            </div>
        </div>
    </div>
</body>

@stop



@section('js')
    <script> console.log('Hi!'); </script>
	
@stop


            