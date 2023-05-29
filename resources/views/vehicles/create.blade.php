<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo vehículo</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('vehicles.store') }}' method='post'>
                @method('post')
                @csrf

                <x-vehicles-campos/>
                <button>Registrar vehículo</button>
                <a href='{{ route('vehicles.index') }}'>Volver al listado de vehículos</a>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
