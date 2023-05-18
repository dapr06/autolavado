<div class="menu">
    <link rel='stylesheet' href='/css/app.css'>
    <a class="menua" href="{{ url('/') }}"><img src="/img/chapuzonLogo.png" width="120" height="40"></a>
    <a class="menua" href="{{ url('/') }}">Nosotros</a>
    <a class="menua" href="{{ url('/services') }}">Servicios</a>
    <a class="menua" href="{{ url('/contacts') }}">Contacto</a>
    <a class="menua" href="{{ url('#') }}">Trabaja con nosotros</a>
    <a class="menua" href="{{ url('/bookings') }}">Reserva/Carrito</a>

    @if (Route::has('login'))

            @auth
                <a href="{{ url('/dashboard') }}>Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-black-600 hover:text-black-900 dark:text-black-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @endauth

    @endif

</div>
