<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando al cliente: {{$client->name}} {{$client->surname}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('clients.update',$client)}}' method='post'>
                @method('put')
                <label for='vehicle_id' hidden> Id_vehicle </label>
                <input type='text' id='vehicle_id' name='vehicle_id' value='{{ $client->vehicle_id }}' hidden/>
                <br>
                <label for='name'>Nombre</label>
                <input type='text' id='name' name='name' value='{{ $client->name }}'/>
                <br>
                <label for='surname'>Apellido</label>
                <input type='text' id='surname' name='surname' value='{{ $client->surname }}'/>
                <br>
                <label for='phone'>Teléfono</label>
                <input type='text' id='phone' name='phone' value='{{ $client->phone }}'/>
                <br>
                <label for='email'>Correo electrónico</label>
                <input type='text' id='email' name='email' value='{{ $client->email }}'/>
                <br><br>
                <button>Actualizar cliente</button>
                <a href='{{ route('clients.index') }}'>Ir al listado de clientes</a>
            </form>
        </div>
    </div>
</div>
<x-footer/>
