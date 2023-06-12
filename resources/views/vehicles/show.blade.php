<x-menu/>
<div class="container">
    <br><h1 class="text-center">Vehículo: {{$vehicle->number_plate}} </h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $vehicle->id }}' action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                        <p>Propietario/a: {{$vehicle->client->name}} {{$vehicle->client->surname}}</p>
                        <p>Matrícula: {{$vehicle->number_plate}}</p>
                        <p>Tipo de interior: {{$vehicle->interior_type}}</p>
                        <p>Color del interior: {{$vehicle->interior_color}}</p>
                        <p>Tipo de exterior: {{$vehicle->exterior_type}}</p>
                        <p>Color del exterior: {{$vehicle->exterior_color}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('vehicles.edit', $vehicle) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('vehicles.index') }}" class="text-white">Volver</a></button>

                        @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
