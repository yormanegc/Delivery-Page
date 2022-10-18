<x-app-layout>
    
   <body>
    
    <div class="max-w-10x1 mx-auto my-0">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-2 xl:pb-32 ">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
    
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
           
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  
                  <div class="-mr-2 flex items-center md:hidden">
                    
                  </div>
                </div>
              </div>
              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                
    
                
    
                
              </div>
            </nav>
          </div>
    
          <!--
            Mobile menu, show/hide based on menu open state.
    
            Entering: "duration-150 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
         
    
          <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 bg-red">
            <div class="sm:text-center lg:text-left">
              <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block xl:inline">BiciBike esta para ti</span>
                <span class="block text-yellow-500 xl:inline">Incluso antes que lo necesites</span>
              </h1>
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                <i class="fas fa-users"></i>  Cantidad de domiciliarios esperando que hagas un pedido, eso significa que tienen ganas de darte un gran servicio en el menor tiempo posible.
               </p>
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                <i class="fas fa-bolt"></i>  Rapidez y seguridad garantizada.
              </p>
      
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                <i class="fas fa-shield-alt"></i>  BiciBike se hace totalmente responsable de daños en la mercancia afectada durante el transcurso de la entrega del pedido.
               </p>
               
               <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                <i class="fas fa-dollar-sign"></i> Los domicilios en automovil son mas costosos pero tambien mas seguros.
               </p>
               
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                  <a href="/order/create" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Hacer un pedido
                  </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                  
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-16 lg:right-0 lg:w-1/2  my-0.5" >
        <img class="" src="/imagenes/Mikebici.png/" alt="" >
      </div>
    </div>


    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
      <div class="container mx-auto px-6">
  
          <div class="sm:flex sm:mt-8">
              <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                  <div class="flex flex-col">
                      <span class="font-bold text-gray-700 uppercase mb-2">Contacto con el programador</span>
                      <span class="my-2 text-blue-700  text-md hover:text-blue-500"><i class="far fa-envelope"></i>
                        Yormanegcr@gmail.com</span>
                      <span class="my-2 text-blue-700  text-md hover:text-blue-500">
                        <i class="fas fa-globe-americas"></i> Venezuela - Estado Zulia</span>
                      
                  </div>
                  <div class="flex flex-col">
                      <span class="font-bold text-gray-700 uppercase mb-2">Asistencia o Ayuda</span>
                      <span class="my-2 text-blue-700  text-md hover:text-blue-500"><i class="far fa-envelope"></i> bicibikedeliverycabimas@gmail.com</span>
                    <span class="my-2 text-blue-700  text-md hover:text-blue-500"><i class="fab fa-facebook-f"></i> Bici Bike Delivery Service</span>
                    <span class="my-2 text-blue-700  text-md hover:text-blue-500"><i class="fab fa-instagram"></i> @BICIBIKEDELIVERY</span>
                  </div>
                  
              </div>
          </div>
      </div>
      <div class="container mx-auto px-6">
          <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
              <div class="sm:w-2/3 text-center py-6">
                  <p class="text-sm text-gray-700 font-bold mb-2">
                      © 2021 by Yorman Gonzalez <br>
                      BiciBike Delivery Service<br>
                      Todos los derechos reservados
                  </p>
              </div>
          </div>
      </div>
  </footer>
    


</body>
</x-app-layout>
