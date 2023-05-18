<a href="{{ url('/') }}"><img src="chapuzonLogo.png" width="120" height="40"></a>
<a href="{{ url('/') }}">Nosotros</a>
<a href="{{ url('/services') }}">Servicios</a>
<a href="{{ url('#') }}">Contacto</a>
<a href="{{ url('#') }}">Trabaja con nosotros</a>
<a href="{{ url('/bookings') }}">Reserva/Carrito</a>


<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @endauth
        </div>
    @endif
</div>
