<H1> Edita Vehículo {{$vehicle->number_plate}}</H1>
<br>
<form action='{{route('vehicles.update',$vehicle)}}' method='post'>
    @method('put')

    <label for='number_plate'>  Matricula </label>
    <input type='text' id='number_plate' name='number_plate' value='{{ $vehicle->number_plate}}' />
    <br><br>
    <label for='interior_type'>  Interior </label>
    <input type='text' id='interior_type' name='interior_type' value='{{ $vehicle->interior_type}}' />
    <br><br>
    <label for='color'>  Color </label>
    <input type='text' id='color' name='color' value='{{ $vehicle->color}}' />
    <br><br>
    <input class='button' type='submit' name='actualizar' value='Actualizar' />
</form>

<a href='{{ route('vehicles.index') }}'>Ir al listado de vehículos</a>
