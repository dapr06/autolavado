<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo vehículo</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('vehicles.store') }}' method='post'>
                @method('post')
                @csrf
                <label for='client_id'>Propietario/a</label>
                <select id='client_id' name='client_id'>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for='number_plate'>Matrícula</label>
                <input type='text' id='number_plate' name='number_plate' value='{{ $vehicle->number_plate ?? '' }}' />
                <br>
                <label for='interior_type'>Interior</label>
                <input type='text' id='interior_type' name='interior_type' value='{{ $vehicle->interior_type ?? '' }}' />
                <br>
                <label for='color'>Color</label>
                <input type='text' id='color' name='color' value='{{ $vehicle->color ?? '' }}' />
                <br><br>

                <button class="btn btn-danger text-white">Registrar vehículo</button>
                <button class="btn btn-info text-white"><a href="{{ route('vehicles.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
