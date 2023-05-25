<x-menu/>
    <h1>Listado de clientes</h1>

    <p>Id_vehiculo: {{$client->vehicle_id}}</p>
    <p>Nombre: {{$client->name}}</p>
    <p>Apellido: {{$client->surname}}</p>
    <p>Telefono: {{$client->phone}}</p>
    <p>Correo: {{$client->email}}</p>

    <a href='{{ route('clients.edit', $client) }}'>Editar cliente</a>
    <br/><br/>

    <form id='{{ $client->id }}' action='{{ route('clients.destroy', $client) }}' method='post'>
        @method('delete')
        <input class='button' type='submit' name='crear' value='Eliminar cliente'/>
    </form><br>

    <a href='{{ route('clients.index') }}'>Volver al listado de cliente.</a>
<x-footer/>

