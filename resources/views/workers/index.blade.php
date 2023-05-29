<x-menu/>
<div class="container">
    <br><h1 class="text-center">Añadir Trabajador</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Turn</th>
                    <th>Availability</th>
                    <th>Eliminar</th>
                </tr>

                @foreach ($workers as $worker)
                    <tr>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->name }}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->surname}}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->DNI }}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->email}}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->role }}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->turn == 0 ? 'Mañana' : 'Tarde' }}</a></td>
                        <td><a href='{{ route('workers.show', $worker) }}'>{{ $worker->availability ? 'Ocupado' : 'Libre' }}</a></td>
                        <td>
                            <form action='{{ route('workers.destroy', $worker) }}' method='post'>
                                @method('delete')
                                @csrf

                                <input class='button' type='submit' name='eliminar' value='X' />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table><br><br>

            <button><a href='{{ route('workers.create') }}'>Registrar trabajador</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
