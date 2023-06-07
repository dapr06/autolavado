<x-menu/>
<div class="container">
    <br><h1 class="text-center">Reserva</h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $booking->id }}' action='{{ route('bookings.destroy', $booking) }}' method='post'>
                        <p hidden>Id_service: {{$booking->service_id}}</p>
                        <p hidden>Id_client: {{$booking->client_id}}</p>
                        <p hidden>Id_vehicle: {{$booking->vehicle_id}}</p>
                        <p>Fecha: {{$booking->date}}</p>
                        <p>Hora: {{$booking->hour}}</p>
                        <p>Número de servicios: {{$booking->number_services}}</p>
                        <p>Precio total: {{$booking->total_price}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('bookings.edit', $booking) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('bookings.index') }}" class="text-white">Volver</a></button>

                        @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
