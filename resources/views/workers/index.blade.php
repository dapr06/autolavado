<x-menu/>
<div class="container">
    <br><h1 class="text-center">Trabajadores registrados</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Correo electrónico</th>
                        <th>Rol</th>
                        <th>Turno</th>
                        <th>Disponibilidad</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
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
                                    <button type="submit" class="btn btn-danger btn-sm">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-primary text-white"><a href="{{ route('workers.create') }}" class="text-white">Registrar trabajador</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
