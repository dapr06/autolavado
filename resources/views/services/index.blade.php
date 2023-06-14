<x-menu/>
<div class="container">
    <br><h1 class="text-center">¡¡Nuestros Servicios!!</h1><br>

    <ul class="nav nav-pills justify-content-center mb-4">
        <li class="nav-item catMenu">
            <a class="nav-link active"  onclick="cambiarVisibilidad('Todos')">Todas</a>
        </li>
        @foreach ($categories as $category)
            <li class="nav-item catMenu">
                <a class="nav-link active" onclick="cambiarVisibilidad('{{ $category->category }}')">{{ ucfirst($category->category) }}</a>
            </li>
        @endforeach
    </ul>

    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-3 servicio" data-categoria="{{ $service->category->category }}">
                <div class="card">
                    <div class="card-body bodyService">
                        <p hidden>Categoría: {{ $service->category->category}}</p>

                        <h5 class="card-title text-center">{{ $service->name}}</h5>
                        <p class="card-text text-justify">{{ $service->description }}</p>
                        <p>Duración aprox: {{ $service->time}}min</p>
                        <p>Precio: {{ $service->price}}€</p>

                        @can('view-services')
                            <form action='{{ route('services.destroy', $service) }}' method='post'>
                                @method('delete')
                                @csrf
                                <button class="btn btn-primary text-white"><a href="{{ route('services.edit', $service) }}" class="text-white">Editar</a></button>
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        @endcan
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div><br>
    @can('view-services')

    <button class="btn btn-primary text-white"><a href="{{ route('services.create') }}" class="text-white">Registrar servicio</a></button><br><br>
    @endcan

</div>
<x-footer/>
