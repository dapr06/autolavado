<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando el vehículo: {{$vehicle->number_plate}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('vehicles.update',$vehicle)}}' method='post'>
                @method('put')
                <label for='number_plate'>Matrícula </label>
                <input type='text' id='number_plate' name='number_plate' value='{{ $vehicle->number_plate}}'/>
                <br>
                <label for='interior_type'>Interior </label>
                <input type='text' id='interior_type' name='interior_type' value='{{ $vehicle->interior_type}}' />
                <br>
                <label for='color'>Color </label>
                <input type='text' id='color' name='color' value='{{ $vehicle->color}}' />
                <br><br>
                <button>Actualizar</button>
                <a href='{{ route('vehicles.index') }}'>Volver al listado de vehículos</a>
            </form>
        </div>
    </div>
</div>
<x-footer/>
