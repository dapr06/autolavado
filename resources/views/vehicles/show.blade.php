<x-menu/>
    <h1>Listado de vehículos</h1>

    <p>Matrícula: {{$vehicle->number_plate}}</p>
    <p>Interior: {{$vehicle->interior_type}}</p>
    <p>Color: {{$vehicle->color}}</p>

    <a href='{{ route('vehicles.edit', $vehicle) }}'>Editar vehículo</a>

    <br/><br/>

    <form id='{{ $vehicle->id }}' action='{{ route('vehicles.destroy', $vehicle) }}' method='post'>
        @method('delete')
        <input class='button' type='submit' name='crear' value='Eliminar Vehículo'/>
    </form><br>
    <a href='{{ route('vehicles.index') }}'>Volver al listado de vehículos.</a>
<x-footer/>
