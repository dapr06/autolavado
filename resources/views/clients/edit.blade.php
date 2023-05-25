<x-menu/>
    <h1> Edita cliente: {{$client->name}} {{$client->surname}}</h1>
    <br>
    <form action='{{route('clients.update',$client)}}' method='post'>
        @method('put')
        <label for='vehicle_id'> Id_vehicle </label>
        <input type='text' id='vehicle_id' name='vehicle_id' value='{{ $client->vehicle_id }}'/>
        <br><br>
        <label for='name'> Nombre </label>
        <input type='text' id='name' name='name' value='{{ $client->name }}'/>
        <br><br>
        <label for='surname'> Apellido </label>
        <input type='text' id='surname' name='surname' value='{{ $client->surname }}'/>
        <br><br>
        <label for='phone'> Teléfono </label>
        <input type='text' id='phone' name='phone' value='{{ $client->phone }}'/>
        <br><br>
        <label for='email'> Correo </label>
        <input type='text' id='email' name='email' value='{{ $client->email }}'/>
        <br><br>

        <input class='button' type='submit' name='actualizar' value='Actualizar'/>
    </form>

    <a href='{{ route('clients.index') }}'>Ir al listado de clientes</a>
<x-footer/>
