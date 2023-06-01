<div class="menu">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <a class="menua" href="{{ url('/') }}"><img src="/img/chapuzonLogo.png" width="120" height="40"></a>
        <a class="menua" href="{{ url('/') }}">Nosotros</a>
        <a class="menua" href="{{ url('/services') }}">Servicios</a>
        <a class="menua" href="{{ url('/contacts') }}">Contacto</a>
        <a class="menua" href="{{ url('/clients') }}">Clientes</a>
        <a class="menua" href="{{ url('/vehicles') }}">Vehículos</a>
        <a class="menua" href="{{ url('/workers') }}">Trabajadores</a>
        <a class="menua" href="{{ url('/bookings') }}">Reservas</a>
        <a class="menua" href="{{ url('#') }}"><img src="/img/carrito.png" class="iconSize"></a>

        @if (Route::has('login'))
                @auth
                        <a href="{{ route('profile.edit') }}" class="menua">
                            <span class="username">{{ Auth::user()->name }}</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="menua">
                                <img src="/img/logout.png" class="iconSize">
                            </button>
                        </form>
                @else
                    <a href="{{ route('login') }}"><img src="/img/acceso.png" class="iconSize"></a>
                @endauth
        @endif
</div>
