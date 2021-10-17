<nav class="bg-white shadow-lg">
  <div class="max-w-6xl mx-auto px-2">
    <div class="flex justify-between">
      <div class="flex space-x-7">
        <div>
          <!-- Website Logo -->
          <a href="#" class="flex items-center py-4 px-2">
            <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="h-8 w-auto mr-2">
            <span class="font-semibold text-gray-500 text-lg">Confecciones Milagritos</span>
          </a>
        </div>
        <!-- Primary Navbar items -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="{{route('materiales.index')}}"   class="{{request()->routeIs('materiales.*') ? 'border-green-500':'border-green-100' }}  py-4 px-2 text-green-500 font-semibold hover:text-green-500 border-b-4">
           Materiales</a>
          <a href="{{route('productos.index')}}"    class="{{request()->routeIs('productos.*') ? 'border-green-500':'border-green-100' }}  py-4 px-2 text-gray-500 font-semibold hover:text-green-500 border-b-4">
            Productos</a>
          <a href="{{route('cotizaciones.index')}}" class="{{request()->routeIs('cotizaciones.*') ? 'border-green-500':'border-green-100' }} py-4 px-2 text-gray-500 font-semibold hover:text-green-500 border-b-4">
            Cotizaciones</a>
          <a href="{{route('clientes.index')}}" class="{{request()->routeIs('clientes.*') ? 'border-green-500':'border-green-100' }} py-4 px-2 text-gray-500 font-semibold hover:text-green-500 border-b-4">
                Clientes</a>
          <a href="{{route('ventas.index')}}"       class="{{request()->routeIs('ventas.*') ? 'border-green-500':'border-green-100' }} py-4 px-2 text-gray-500 font-semibold hover:text-green-500 border-b-4">
            Ventas</a>
        </div>
      </div>
      <!-- Secondary Navbar items -->
      <div class="hidden md:flex items-center space-x-3 ">
        <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
        <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
      </div>
      <!-- Mobile menu button -->
      <div class="md:hidden flex items-center">
        <button class="outline-none mobile-menu-button">
        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
          x-show="!showMenu"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      </div>
    </div>
  </div>
  <!-- mobile menu -->
  <div class="hidden mobile-menu md:hidden">
    <ul class="">
      <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
      <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
      <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
      <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>



    </ul>
  </div>
  <script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
      menu.classList.toggle('hidden');
    });
  </script>
</nav>
