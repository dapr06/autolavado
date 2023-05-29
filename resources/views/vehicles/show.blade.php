<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta viendo el vehículo: {{$vehicle->number_plate}}</h1><br>
    <div class="row">
        <div class="col-md-12">
            <p>Matrícula: {{$vehicle->number_plate}}</p>
            <p>Interior: {{$vehicle->interior_type}}</p>
            <p>Color: {{$vehicle->color}}</p>

            <button><a href='{{ route('vehicles.edit', $vehicle) }}'>Editar vehículo</a></button>

            <form id='{{ $vehicle->id }}' action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
                @method('delete')
                <button>Eliminar vehículo</button>
            </form>
            <a href='{{ route('vehicles.index') }}'>Volver al listado de vehículos.</a>
        </div>
    </div>
</div>
<x-footer/>
