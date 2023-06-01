<x-menu/>
<div class="container">
    <br><h1 class="text-center">Vehículo {{$vehicle->number_plate}} </h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">

                    <form id='{{ $vehicle->id }}' action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                        <p>Matrícula: {{$vehicle->number_plate}}</p>
                        <p>Interior: {{$vehicle->interior_type}}</p>
                        <p>Color: {{$vehicle->color}}</p>

                        <button><a href='{{ route('vehicles.edit', $vehicle) }}'>Editar</a></button>

                        @method('delete')
                        <button>Eliminar</button>

                        <br><a href='{{ route('vehicles.index') }}'>Volver al listado de vehículos.</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
