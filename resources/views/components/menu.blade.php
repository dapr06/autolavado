<div class="menu" style="display: flex; flex-wrap: nowrap; align-items: center;">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <a class="menua" href="{{ url('/') }}"><img src="/img/chapuzonLogo.png" width="120" height="40"></a>
    <a class="menua" href="{{ url('/') }}">Nosotros</a>
    <a class="menua" href="{{ url('/services') }}">Servicios</a>
    <a class="menua" href="{{ url('/contacts') }}">Contacto</a>
    <a class="menua" href="{{ url('/bookings') }}">Reserva/Carrito</a>

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <div >
                    <div>
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                    <div >
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-responsive-nav-link>
                    </div>
                        <!-- Authentication -->
                    <div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"><img src="/img/acceso.png" class="inicios"></a>
            @endauth
        </div>
    @endif
</div>
