<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando el vehículo: {{$vehicle->number_plate}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('vehicles.update',$vehicle)}}' method='post'>
                @method('put')
                @csrf

                <label for='client_id'>  Id cliente </label>
                <input type='text' id='client_id' name='client_id' value='{{ $vehicle->client_id ?? '' }}' />
                <br>
                <label for='number_plate'>Matrícula </label>
                <input type='text' id='number_plate' name='number_plate' value='{{ $vehicle->number_plate ?? ''}}'/>
                <br>
                <label for='interior_type'>Interior </label>
                <input type='text' id='interior_type' name='interior_type' value='{{ $vehicle->interior_type ?? ''}}' />
                <br>
                <label for='color'>Color </label>
                <input type='text' id='color' name='color' value='{{ $vehicle->color ?? ''}}' />
                <br><br>
                <button class="btn btn-danger">Actualizar</button>

                <button class="btn btn-info text-white"><a href="{{ route('vehicles.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
