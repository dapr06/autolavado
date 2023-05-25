<x-menu/>
    <h1>Listado de reservas</h1>

    <p>Id_service: {{$booking->service_id}}</p>
    <p>Id_client: {{$booking->client_id}}</p>
    <p>Id_vehicle: {{$booking->vehicle_id}}</p>
    <p>Fecha: {{$booking->date}}</p>
    <p>Hora: {{$booking->hour}}</p>
    <p>Numero servicios: {{$booking->number_services}}</p>
    <p>Precio total: {{$booking->total_price}}</p>

    <a href='{{ route('bookings.edit', $booking) }}'>Editar reserva</a>
    <br/><br/>

    <form id='{{ $booking->id }}' action='{{ route('bookings.destroy', $booking) }}'
          method='post'>
        @method('delete')
        <input class='button' type='submit' name='crear' value='Eliminar reserva'/>
    </form><br>

    <a href='{{ route('bookings.index') }}'>Volver al listado de reservas.</a>

<x-footer/>
