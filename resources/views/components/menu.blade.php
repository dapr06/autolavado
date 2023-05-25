<div class="menu" style="background: dodgerblue; display: flex; flex-wrap: nowrap; color: white; justify-content: space-between; align-items: center;">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <a class="menua" href="{{ url('/') }}"><img src="/img/chapuzonLogo.png" width="120" height="40"></a>
    <a class="menua" href="{{ url('/') }}">Nosotros</a>
    <a class="menua" href="{{ url('/services') }}">Servicios</a>
    <a class="menua" href="{{ url('/contacts') }}">Contacto</a>
    <a class="menua" href="{{ url('/clients') }}">Clientes</a>
    <a class="menua" href="{{ url('/vehicles') }}">Vehiculo</a>
    <a class="menua" href="{{ url('/workers') }}">Trabajador</a>
    <a class="menua" href="{{ url('/bookings') }}">Reserva/Carrito</a>

    @if (Route::has('login'))
            @auth
                    <a href="{{ route('profile.edit') }}" class="nombreuser">
                        <span class="username">{{ Auth::user()->name }}</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-button">
                            <img src="/img/logout.png" class="logout">
                        </button>
                    </form>
            @else
                <a href="{{ route('login') }}"><img src="/img/acceso.png" class="inicios"></a>
            @endauth
    @endif
</div>
