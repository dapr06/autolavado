<x-menu/>
<div class="container">
    <br><h1 class="text-center">Esta editando el servicio: {{$service->name}} </h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('services.update', $service)}}' method='post'>
                @method('put')
                <label for='category_id'> Categoría </label>
                <select id='category_id' name='category_id'>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }} </option>
                    @endforeach
                </select>
                <br>
                <label for='name'>Nombre </label>
                <input id='name' name='name' type='text' value='{{ $service->name }}'>
                <br>
                <label for='description'>Descripción </label>
                <input id='description' name='description' type='text' value='{{ $service->description }}'>
                <br>
                <label for='time'>Duración </label>
                <input id="time" name='time' type='text' value='{{$service->time}}'>
                <br>
                <label for='price'>Precio </label>
                <input id='price' name='price' type='text' value='{{ $service->price }}'>
                <br><br>
                <button class="btn btn-danger">Actualizar</button>

                <button class="btn btn-info text-white"><a href="{{ route('services.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
