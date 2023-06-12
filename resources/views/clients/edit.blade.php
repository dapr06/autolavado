<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando el cliente: {{$client->name}} {{$client->surname}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('clients.update',$client)}}' method='post'>
                @method('put')
                <label for="name">Nombre<span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', isset($client) ? $client->name : '') }}">

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="surname">Apellidos<span class="required">*</span></label>
                <input type="text" id="surname" name="surname" value="{{ old('surname', isset($client) ? $client->surname : '') }}">

                @error('surname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="phone">Teléfono<span class="required">*</span></label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', isset($client) ? $client->phone : '') }}">

                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="email">Correo electrónico<span class="required">*</span></label>
                <input type="text" id="email" name="email" value="{{ old('email', isset($client) ? $client->email : '') }}">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <button class="btn btn-danger">Actualizar</button>

                <button class="btn btn-info text-white"><a href="{{ route('clients.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
