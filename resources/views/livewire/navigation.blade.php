
    
<nav class="bg-gray-800 " x-data="(open: false)" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" x-on:click="open = true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <a href="/dashboard" class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="/imagenes/Color.png/" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="/imagenes/Color.png/" alt="Workflow">
          </a>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">
                {{ __('Nuevo pedido') }} </a>
              <a href="{{Route('order.index')}}" :active="request()->routeIs('order.index')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                {{ __('Mis Pedidos') }} </a>
              
            </div>
          </div>
        </div>
    
       @auth
           
       
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
         
  
          <!-- Profile dropdown -->
          <div class="ml-3 relative" x-data="{open : false}">
            <div>
              <button x-on:click="open = true" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                {{ Auth::user()->name }}
              </button>
            </div>
            <!--
              Profile dropdown panel, show/hide based on dropdown state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Perfil') }}
                </x-jet-dropdown-link>
              
              @can('admin.index')
                                
                            
              <x-jet-dropdown-link href="{{ route('admin.index') }}">
                  {{ __('Administrador') }}
              </x-jet-dropdown-link>
              
              @endcan
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Salir') }}
                </x-jet-dropdown-link>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
        
    @else
        <div>
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 ">Registrarse</a>
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>
        </div>
    
    @endauth
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open" id="mobile-menu" x-on:click.away="open = false">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">
          {{ __('Nuevo pedido') }} </a>
        <a href="{{Route('order.index')}}" :active="request()->routeIs('order.index')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
          {{ __('Mis Pedidos') }} </a>
      </div>
    </div>
  </nav>
  

