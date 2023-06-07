<x-menu/>
<div class="container">
    <br><h1 class="text-center"> CLiente: {{$client->name}} {{$client->surname}}</h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $client->id }}' action='{{ route('clients.destroy', $client) }}' method='post'>
                        <p>Nombre: {{$client->name}}</p>
                        <p>Apellido: {{$client->surname}}</p>
                        <p>Teléfono: {{$client->phone}}</p>
                        <p>Correo electrónico: {{$client->email}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('clients.edit', $client) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('clients.index') }}" class="text-white">Volver</a></button>

                        @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
