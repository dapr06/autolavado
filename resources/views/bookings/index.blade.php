<x-menu/>
<div class="container">
    <br><h1 class="text-center"> Reservas registradas</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Número de servicios</th>
                        <th>Precio total</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td><a href='{{ route('bookings.show', $booking) }}'>{{ $booking->date }}</a></td>
                            <td><a href='{{ route('bookings.show', $booking) }}'>{{ $booking->hour }}</a></td>
                            <td><a href='{{ route('bookings.show', $booking) }}'>{{ $booking->number_services }}</a></td>
                            <td><a href='{{ route('bookings.show', $booking) }}'>{{ $booking->total_price }}</a></td>
                            <td>
                                <form action='{{ route('bookings.destroy', $booking) }}' method='post'>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-primary text-white"><a href="{{ route('bookings.create') }}" class="text-white">Registrar reserva</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
