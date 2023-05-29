<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta viendo al cliente: {{$client->name}} {{$client->surname}}</h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">

            <form id='{{ $client->id }}' action='{{ route('clients.destroy', $client) }}' method='post'>
                <p hidden>Id_vehiculo: {{$client->vehicle_id}}</p>
                <p>Nombre: {{$client->name}}</p>
                <p>Apellido: {{$client->surname}}</p>
                <p>Telefono: {{$client->phone}}</p>
                <p>Correo electrónico: {{$client->email}}</p>

                <button><a href='{{ route('clients.edit', $client) }}'>Editar cliente</a></button>

                @method('delete')
                <button>Eliminar cliente</button>

                <br><a href='{{ route('clients.index') }}'>Volver al listado de clientes</a>
            </form>

                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
