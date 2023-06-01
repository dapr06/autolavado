<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar una nueva reserva</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('bookings.store') }}' method='post'>
                @method('post')
                @csrf

                <x-bookings-campos/>
                <button>Registrar reserva</button>
                <a href='{{ route('bookings.index') }}'>Volver al listado de reservas</a>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
