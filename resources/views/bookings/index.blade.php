<x-menu/>
<div class="container">
    <br><h1 class="text-center"> Reservas registradas</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Numero servicios</th>
                    <th>Total precio</th>
                    <th>Eliminar</th>
                </tr>

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
                                <button>X</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table><br>
            <button><a href='{{ route('bookings.create') }}'>Registrar reserva</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
