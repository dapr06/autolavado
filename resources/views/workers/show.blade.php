<x-app-layout>
    <h1>Listado de trabajadores</h1>

    <p>Name: {{$worker->name}}</p>
    <p>Surname: {{$worker->surname}}</p>
    <p>DNI: {{$worker->dni}}</p>
    <p>Email: {{$worker->email}}</p>
    <p>Role: {{$worker->role}}</p>
    <p>Turn: {{$worker->turn}}</p>
    <p>Availability: {{$worker->availability}}</p>

    <a href='{{ route('workers.edit', $worker) }}'>Editar trabajador</a>
    <br/><br/>

    <form id='{{ $worker->id }}' action='{{ route('workers.destroy', $worker) }}' method='post'>
        @method('delete')

        <input class='button' type='submit' name='crear' value='Eliminar trabajador'/>
    </form>
    <br>

    <a href='{{ route('workers.index') }}'>Volver al listado de trabajadores.</a>
</x-app-layout>
