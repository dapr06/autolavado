<x-menu/>
<div class="container">
    <br><h1 class="text-center">Vehículos registrados</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Propietario</th>
                        <th>Matrícula</th>
                        <th>Interior</th>
                        <th>Color</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td><a href='{{ route('vehicles.show', $vehicle->client_id) }}'>{{ $vehicle->client->name }} {{ $vehicle->client->surname }}</a></td>
                            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->number_plate }}</a></td>
                            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->interior_type}}</a></td>
                            <td><a href='{{ route('vehicles.show', $vehicle) }}'>{{ $vehicle->color }}</a></td>
                            <td>
                                <form action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-primary text-white"><a href="{{ route('vehicles.create') }}" class="text-white">Registrar vehículo</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
