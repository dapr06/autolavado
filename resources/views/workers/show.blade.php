<x-menu/>
<div class="container">
    <br><h1 class="text-center">Trabajador {{$worker->name}} {{$worker->surname}}</h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $worker->id }}' action='{{ route('workers.destroy', $worker) }}' method='post'>
                        <p>Nombre: {{$worker->name}}</p>
                        <p>Apellido: {{$worker->surname}}</p>
                        <p>DNI: {{$worker->DNI}}</p>
                        <p>Correo electrónico: {{$worker->email}}</p>
                        <p>Rol: {{$worker->role}}</p>
                        <p>Turno: {{$worker->turn}}</p>
                        <p>Disponibilidad: {{$worker->availability}}</p>

                        <button><a href='{{ route('workers.edit', $worker) }}'>Editar</a></button>

                        @method('delete')
                        <button>Eliminar</button>

                        <br><a href='{{ route('workers.index') }}'>Volver al listado de trabajadores.</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
