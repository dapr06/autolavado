<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando a {{$worker->name}} {{$worker->surname}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('workers.update',$worker)}}' method='post'>
                @method('put')
                <label for='name'>Nombre </label>
                <input id='name' name='name' type='text' value='{{$worker->name}}'>
                <br>
                <label for='surname'>Apellido </label>
                <input id='surname' name='surname' type='text' value='{{ $worker->surname }}'>
                <br>
                <label for='DNI'>DNI </label>
                <input id='DNI' name='DNI' type='text' value='{{ $worker->DNI }}'>
                <br>
                <label for='email'>Correo electrónico </label>
                <input id='email' name='email' type='text' value='{{ $worker->email }}'>
                <br>
                <label for='role'>Rol </label>
                <input id='role' name='role' type='text' value='{{ $worker->role }}'>
                <br>
                <label for="turn">Turno</label>
                <select name="turn" id="turn">
                    <option value="0" {{ $worker->turn == 0 ? 'selected' : '' }}>Mañana</option>
                    <option value="1" {{ $worker->turn == 1 ? 'selected' : '' }}>Tarde</option>
                </select>
                <br><br>
                <label for='availability'>  Disponibilidad </label>
                <select id='availability' name='availability'>
                    <option value='0' {{ $worker->availability == 0 ? 'selected' : '' }}>Libre</option>
                    <option value='1' {{ $worker->availability == 1 ? 'selected' : '' }}>Ocupado</option>
                </select>
                <br><br>

                <button>Actualizar</button>
                <a href='{{ route('workers.index') }}'>Ir al listado de trabajadores</a>
            </form>
        </div>
    </div>
</div>
<x-footer/>
