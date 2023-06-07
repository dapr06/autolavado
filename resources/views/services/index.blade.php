<x-menu/>
    <div class="container">
        <br><h1 class="text-center">¡¡Nuestros Servicios!!</h1><br>
        <p class="text-justify">
            Chapuzón es una empresa especializada en la limpieza de vehículos, tanto en su exterior como en su
            interior. Contamos con un equipo de profesionales altamente capacitados y utilizamos productos de
            calidad para garantizar resultados excepcionales.</p>

        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <p>Categoría: {{ $service->category->category}}</p>

                            <h4 class="card-title text-center">{{ $service->name}}</h4>
                            <p class="card-text text-justify">{{ $service->description }}</p>
                            <p>Duración aproximada: {{ $service->time}}min</p>
                            <p>Precio: {{ $service->price}}€</p>
                            <p class="text-center"><a href='{{ route('services.edit', $service) }}'><img src="/img/edit.png" width="20" height="20"></a></p>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        </div><br>
        <button class="btn btn-primary text-white"><a href="{{ route('services.create') }}" class="text-white">Registrar servicio</a></button><br><br>
    </div>
<x-footer/>
