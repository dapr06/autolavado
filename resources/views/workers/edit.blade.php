<x-menu/>
    <h1> Edita trabajador {{$worker->name}}</h1>
    <br>
    <form action='{{route('workers.update',$worker)}}' method='post'>
        @method('put')
        <label for='name'>Name </label>
        <input id='name' name='name' type='text' value='{{$worker->name}}'>
        <br><br>
        <label for='surname'>Surname </label>
        <input id='surname' name='surname' type='text' value='{{ $worker->surname }}'>
        <br><br>
        <label for='DNI'>DNI </label>
        <input id='DNI' name='DNI' type='text' value='{{ $worker->DNI }}'>
        <br><br>
        <label for='email'>Email </label>
        <input id='email' name='email' type='text' value='{{ $worker->email }}'>
        <br><br>
        <label for='role'>Role </label>
        <input id='role' name='role' type='text' value='{{ $worker->role }}'>
        <br><br>
        <label for="turn">Turn:</label>
        <select name="turn" id="turn">
            <option value="0" {{ $worker->turn == 0 ? 'selected' : '' }}>Mañana</option>
            <option value="1" {{ $worker->turn == 1 ? 'selected' : '' }}>Tarde</option>
        </select>
        <br><br>

        <label for='availability'>  Availability </label>
        <select id='availability' name='availability'>
            <option value='0' {{ $worker->availability == 0 ? 'selected' : '' }}>Libre</option>
            <option value='1' {{ $worker->availability == 1 ? 'selected' : '' }}>Ocupado</option>
        </select>
        <br><br>

        <br><br>
        <input class='button' type='submit' name='actualizar' value='Actualizar' />
    </form>

    <a href='{{ route('workers.index') }}'>Ir al listado de trabajadores</a>
<x-footer/>
