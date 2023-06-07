<x-menu/>
<div class="container">
    <br><h1 class="text-center"> Servicio: {{$client->name}} </h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $service->id }}' action='{{ route('services.destroy', $service) }}' method='post'>
                        <p hidden>Categoría: {{ $service->category->category}}</p>
                        <p>Nombre: {{$service->name}}</p>
                        <p>Descripción: {{$service->description}}</p>
                        <p>Duración: {{$service->time}}</p>
                        <p>Precio: {{$service->price}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('services.edit', $service) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('services.index') }}" class="text-white">Volver</a></button>

                          @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
