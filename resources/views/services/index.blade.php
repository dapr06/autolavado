<x-app-layout>
    <h2>Servicios</h2>
    <table border="1">
        <tr>
            <th>Id_worker</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Eliminar</th>
        </tr>

        @foreach ($services as $service)
            <tr>
                <td><a href='{{ route('services.show', $service) }}'>{{ $service->worker_id }}</a></td>
                <td><a href='{{ route('services.show', $service) }}'>{{ $service->name}}</a></td>
                <td><a href='{{ route('services.show', $service) }}'>{{ $service->description }}</a></td>
                <td><a href='{{ route('services.show', $service) }}'>{{ $service->price}}</a></td>
                <td>
                    <form action='{{ route('services.destroy', $service) }}' method='post'>
                        @method('delete')
                        @csrf

                        <input class='button' type='submit' name='eliminar' value='X'/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table><br><br>
    <button><a href='{{ route('services.create') }}'>Crear servicio</a></button><br><br>
</x-app-layout>


