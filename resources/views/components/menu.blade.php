<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/chapuzonLogo.png" width="120" height="40" alt="Logo">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/services') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/contacts') }}">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#') }}">
                    <img src="/img/carrito.png" class="iconSize" alt="Carrito">
                </a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link nombreuser" style="color: white" href="{{ route('profile.edit') }}">
                            <span class="username">{{ Auth::user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn nav-link logout-button">
                                <img src="/img/logout.png" class="iconSize" alt="Logout">
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <img src="/img/acceso.png" class="iconSize" alt="Acceso">
                        </a>
                    </li>
                @endauth
            @endif

            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/categories') }}">Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/clients') }}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/vehicles') }}">Vehículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/workers') }}">Trabajadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="{{ url('/bookings') }}">Reservas</a>
            </li>

        </ul>
    </div>
</nav>

<style>

    @media (max-width: 767.98px) {
        .navbar-nav .nav-link {
            display: block;
            padding: 5px;
        }
    }
</style>
