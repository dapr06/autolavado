<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo servicio</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('services.store') }}' method='post'>
                @method('post')
                @csrf
                <label for='category_id'> Categoría </label>
                <select id='category_id' name='category_id'>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }} </option>
                    @endforeach
                </select>
                <br>
                <label for='name'> Nombre </label>
                <input type='text' id='name' name='name' value='{{ $service->name ?? '' }}'/>
                <br>
                <label for='description'> Descripción </label>
                <input type='text' id='description' name='description' value='{{ $service->description ?? '' }}'/>
                <br>
                <label for='time'> Duración </label>
                <input type='text' id='time' name='time' value='{{ $service->time ?? '' }}'/>
                <br>
                <label for='price'> Precio </label>
                <input type='text' id='price' name='price' value='{{ $service->price ?? '' }}'/>
                <br><br>
                <button class="btn btn-danger text-white">Registrar servicio</button>
                <button class="btn btn-info text-white"><a href="{{ route('services.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
