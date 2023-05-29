<x-menu/>
<div class="container">
    <br><h1 class="text-center">Vehículos registrados</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table>
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
{{--
                            <button><a href='{{ route('vehicles.show', $vehicle) }}'><img src="/img/edit.png" width="30" height="30"></a></button><br><br>
--}}

                            <form action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                                @method('delete')
                                @csrf
                                <button>X</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table><br>
            <button><a href='{{ route('vehicles.create') }}'>Registrar vehículo</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>


