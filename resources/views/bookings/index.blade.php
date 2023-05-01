<x-app-layout>
    <h2>Reservas</h2>
    <table border="1">
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

                        <input class='button' type='submit' name='eliminar' value='X'/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table><br><br>

    <button><a href='{{ route('bookings.create') }}'>Registrar reserva</a></button><br><br>
</x-app-layout>
