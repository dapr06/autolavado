<x-menu/>

<div class="container">
    <br>
    <h1 class="text-center">Tus vehículos</h1><br>
    @php
        $client_id = auth()->user()->id;
        $client_vehicles = $vehicles->where('client_id', $client_id);
    @endphp
    @if ($client_vehicles->isEmpty())
        <div class="alert alert-info">Ahora mismo no hay vehículos registrados.</div>
        <button class="btn btn-primary text-white myvehicleFooter"><a href="{{ route('myvehicles.create') }}" class="text-white">Añadir nuevo vehículo</a></button><br><br>
    @else
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th hidden>Propietario</th>
                        <th>Matrícula</th>
                        <th>Tipo Interior</th>
                        <th>Color Interior</th>
                        <th>Tipo Exterior</th>
                        <th>Color Exterior</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($client_vehicles as $vehicle)
                        <tr>
                            <td hidden>{{ $vehicle->client->name }} {{ $vehicle->client->surname }}</td>
                            <td>{{ $vehicle->number_plate }}</td>
                            <td><a>{{ $vehicle->interior_type }}</a></td>
                            <td><a>{{ $vehicle->interior_color }}</a></td>
                            <td><a>{{ $vehicle->exterior_type }}</a></td>
                            <td><a>{{ $vehicle->exterior_color }}</a></td>
                            <td>
                                <form action='{{ route('myvehicles.destroy', $vehicle) }}' method='post'>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table><br>
                <button class="btn btn-primary text-white myvehicleFooter2"><a href="{{ route('myvehicles.create') }}" class="text-white">Añadir nuevo vehículo</a></button><br><br>
            </div>
        </div>
    @endif
</div>

<x-footer/>
