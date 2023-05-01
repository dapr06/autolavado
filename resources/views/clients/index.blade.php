<x-app-layout>
    <h2>Clientes</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Eliminar</th>
        </tr>

        @foreach ($clients as $client)
            <tr>
                <td><a href='{{ route('clients.show', $client) }}'>{{ $client->name }}</a></td>
                <td><a href='{{ route('clients.show', $client) }}'>{{ $client->surname}}</a></td>
                <td><a href='{{ route('clients.show', $client) }}'>{{ $client->phone }}</a></td>
                <td><a href='{{ route('clients.show', $client) }}'>{{ $client->email}}</a></td>
                <td>
                    <form action='{{ route('clients.destroy', $client) }}' method='post'>
                        @method('delete')
                        @csrf

                        <input class='button' type='submit' name='eliminar' value='X'/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table><br><br>

    <button><a href='{{ route('clients.create') }}'>Registrar cliente</a></button><br><br>
</x-app-layout>




