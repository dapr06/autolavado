<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar una nueva reserva</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('bookings.store') }}' method='post'>
                @method('post')
                @csrf

                <x-bookings-campos/>

                <button class="btn btn-danger text-white">Registrar reserva</button>
                <button class="btn btn-info text-white"><a href="{{ route('bookings.index') }}" class="text-white">Volver</a></button><br><br>
            </form>
        </div>
    </div>
</div>
<x-footer/>
