<h2>Trabajadores</h2>
<table border="1">
    <tr>

        <th>Matrícula</th>
        <th>Interior</th>
        <th>Color</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($vehicles as $vehicle)
        <tr>

            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->number_plate }}</a></td>
            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->interior_type}}</a></td>
            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->color }}</a></td>

            <td>
                <form action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                    @method('delete')
                    @csrf

                    <input class='button' type='submit' name='eliminar' value='X' />
                </form>
            </td>
        </tr>

    @endforeach

</table><br><br>

<button><a href='{{ route('vehicles.create') }}'>Registrar vehículo</a></button><br><br>



