<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo vehículo</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('vehicles.store') }}' method='post'>
                @method('post')
                @csrf

                <x-vehicles-campos/>
                <button class="btn btn-danger text-white">Registrar vehículo</button>
                <button class="btn btn-info text-white"><a href="{{ route('vehicles.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
