<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando la reserva</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('bookings.update',$booking)}}' method='post'>
                @method('put')
                <label for='service_id' hidden> Id_service </label>
                <input type='text' id='service_id' name='service_id' value='{{ $booking->service_id }}' hidden/>
                <label for='client_id' hidden> Id_client </label>
                <input type='text' id='client_id' name='client_id' value='{{ $booking->client_id }}' hidden/>
                <label for='vehicle_id' hidden> Id_vehicle </label>
                <input type='text' id='vehicle_id' name='vehicle_id' value='{{ $booking->vehicle_id }}' hidden/>
                <label for='date'> Fecha </label>
                <input type='text' id='date' name='date' value='{{ $booking->date }}'/>
                <br>
                <label for='hour'> Hora </label>
                <input type='text' id='hour' name='hour' value='{{ $booking->hour }}'/>
                <br>
                <label for='number_services'> Número de servicios </label>
                <input type='text' id='number_services' name='number_services' value='{{ $booking->number_services }}'/>
                <br>
                <label for='total_price'> Precio total </label>
                <input type='text' id='total_price' name='total_price' value='{{ $booking->total_price }}'/>
                <br><br>
                <button class="btn btn-danger">Actualizar</button>

                <button class="btn btn-info text-white"><a href="{{ route('bookings.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
