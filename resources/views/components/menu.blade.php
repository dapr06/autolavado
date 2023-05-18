<div class="menu">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <a class="menua" href="{{ url('/') }}"><img src="/img/chapuzonLogo.png" width="120" height="40"></a>
    <a class="menua" href="{{ url('/') }}">Nosotros</a>
    <a class="menua" href="{{ url('/services') }}">Servicios</a>
    <a class="menua" href="{{ url('/contacts') }}">Contacto</a>
    <a class="menua" href="{{ url('#') }}">Trabaja con nosotros</a>
    <a class="menua" href="{{ url('/bookings') }}">Reserva/Carrito</a>

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
