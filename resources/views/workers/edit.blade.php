<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando al trabajador {{$worker->name}} {{$worker->surname}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('workers.update',$worker)}}' method='post'>
                @method('put')
                <label for='name'>  Nombre<span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', isset($worker) ? $worker->name : '') }}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='surname'>  Apellido<span class="required">*</span></label>
                <input type='text' id='surname' name='surname' value="{{ old('surname', isset($worker) ? $worker->surname : '') }}">
                @error('surname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='DNI'>  DNI<span class="required">*</span></label>
                <input type='text' id='DNI' name='DNI' value="{{ old('DNI', isset($worker) ? $worker->DNI : '') }}">
                @error('DNI')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='email'>  Correo electrónico<span class="required">*</span></label>
                <input type='text' id='email' name='email' value="{{ old('email', isset($worker) ? $worker->email : '') }}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='role'>  Rol<span class="required">*</span></label>
                <input type='text' id='role' name='role' value="{{ old('role', isset($worker) ? $worker->role : '') }}">
                @error('role')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="turn">Turno<span class="required">*</span></label>
                <select name="turn" id="turn">
                    <option value="0">Mañana</option>
                    <option value="1">Tarde</option>
                </select>
                @error('turn')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br><br>

                <button class="btn btn-danger">Actualizar</button>
                <button class="btn btn-info text-white"><a href="{{ route('workers.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
