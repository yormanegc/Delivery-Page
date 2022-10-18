<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bicibike') }}
        </h2>
    </x-slot> -->

    

           
    <!-- component -->
    
                
    <form action="/order" class=" formulario-crear"  method="POST">
         @csrf
              

    
      
      <div class="mt-10 sm:mt-0 md:content-around">
        <div class="">
          
          <div class="mt-5 md:mt-0 md:col-span-2">
            
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre y apellido</label>
                      <input type="text"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="nombreap" required>
                    </div>
      
                    <div class="col-span-6 sm:col-span-3">
                      <label for="last_name" class="block text-sm font-medium text-gray-700">Cedula</label>
                      <input type="text"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-400 shadow-sm sm:text-sm border-gray-300 rounded-md" name="cedula" required>
                    </div>
      
                    <div class="col-span-6 sm:col-span-4">
                      <label for="email_address" class="block text-sm font-medium text-gray-700">Numero de telefono</label>
                      <input type="text"    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-200 shadow-sm sm:text-sm border-gray-300 rounded-md" name="numerotel" required>
                    </div>
      
                    <div class="col-span-6 sm:col-span-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">¿Quieres que tu domi vaya en bici o auto?</label>
                      <select    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="tipo" required>
                        <option>Elige...</option>
                        <option>Bici</option>
                        <option>Auto</option>
                        
                      </select>
                    </div>
      
                    <div class="col-span-6">
                      <label for="street_address" class="block text-sm font-medium text-gray-700">Direccion de entrega</label>
                      <textarea class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' placeholder='Especificanos bien tu direccion.' name="direcciondeen" required></textarea>
                    </div>

                    <div class="col-span-6">
                        <label for="street_address" class="block text-sm font-medium text-gray-700">Direccion de retiro</label>
                        <textarea class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' placeholder='Especificanos bien tu direccion.' name="direccionderetiro" required></textarea>
                      </div>
      
                    
                <div class="px-4 py-3  text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 h-8 w-24">
                    <i class="fas fa-check"></i>
                  </button>
                  <br>
                  
                </div>
                
                <div class="px-4 py-3  text-right sm:px-6 ml-8">
                      <button class="focus:outline-none text-white text-sm  rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg h-8 w-24" type="button"><a href="{{ route('dashboard') }}"><i class="fas fa-ban"></i></a></button>
                      </button>
                </div>
              </div>
            </form>
          
      
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

$('.formulario-crear').submit(function(e){
			e.preventDefault();

            Swal.fire({
  title: 'Gracias por preferirnos.',
  text: 'Dale al "Ok" para confirmar tu pedido.',
  imageUrl: '/imagenes/bicimike.gif',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
  confirmButtonText: 'Esto no es un "Ok", pero si quiero hacer mi pedido.',
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


            </x-app-layout>