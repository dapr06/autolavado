<x-menu/>
<div class="container">
    <br><h1 class="text-center">Clientes registrados</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
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
                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-primary text-white"><a href="{{ route('clients.create') }}" class="text-white">Registrar cliente</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
