<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/img/chapuzonLogo.png" width="120" height="40" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item top">
                <a class="nav-link" href="{{ url('/') }}">Nosotros</a>
            </li>
            <li class="nav-item top">
                <a class="nav-link" href="{{ url('/services') }}">Servicios</a>
            </li>
            <li class="nav-item top">
                <a class="nav-link" href="{{ url('/contacts') }}">Contacto</a>
            </li>
            @can('view-myvehicles')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/myvehicles') }}">Mis vehículos</a>
                </li>
            @endcan
            @can('view-cart')
            <li class="nav-item top">
                <a class="nav-link" href="{{ route('cart.view') }}">
                    <img src="/img/carrito.png" class="iconSize" alt="Carrito">
                </a>
            </li>
            @endcan
            @can('view-workers')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/workers') }}">Trabajadores</a>
                </li>
            @endcan
            @can('view-clients')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/clients') }}">Clientes</a>
                </li>
            @endcan
            @can('view-vehicles')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/vehicles') }}">Vehículos</a>
                </li>
            @endcan
            @can('view-categories')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/categories') }}">Categorías</a>
                </li>
            @endcan
            @can('view-bookings')
                <li class="nav-item top">
                    <a class="nav-link" href="{{ url('/bookings') }}">Reservas</a>
                </li>
            @endcan
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a class="nav-link top" href="{{ route('profile.edit') }}">
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
                    <li class="nav-item top">
                        <a class="nav-link" href="{{ route('login') }}">
                            <img src="/img/acceso.png" class="iconSize" alt="Acceso">
                        </a>
                    </li>
                @endauth
            @endif
        </ul>
    </div>
</nav>

