<x-menu/>
<div class="container">
    <br><h1 class="text-center">Trabajador: {{$worker->name}} {{$worker->surname}}</h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $worker->id }}' action='{{ route('workers.destroy', $worker) }}' method='post'>
                        <p>Nombre: {{$worker->name}}</p>
                        <p>Apellido: {{$worker->surname}}</p>
                        <p>Teléfono: {{$worker->phone}}</p>
                        <p>DNI: {{$worker->DNI}}</p>
                        <p>Correo electrónico: {{$worker->email}}</p>
                        <p>Rol: {{$worker->role}}</p>
                        <p>Turno: {{$worker->turn}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('workers.edit', $worker) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('workers.index') }}" class="text-white">Volver</a></button>

                        @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
