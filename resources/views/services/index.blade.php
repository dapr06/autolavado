<x-menu/>
    <div class="container">
        <h1 class="text-center">¡¡Nuestros Servicios!!</h1><br>
        <p class="text-justify">
            Chapuzón es una empresa especializada en la limpieza de vehículos, tanto en su exterior como en su
            interior. Contamos con un equipo de profesionales altamente capacitados y utilizamos productos de
            calidad para garantizar resultados excepcionales.</p>
        <div class="row">
            @foreach ($services as $service)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $service->name}}</h4>
                                <p class="card-text text-justify">{{ $service->description }}</p>
                                <p>Precio: {{ $service->price}}€</p>
                                <p>Duración aproximada: {{ $service->time}}min</p>
                                <p>Botón edit admin: <a href='{{ route('services.edit', $service) }}'>X</a></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>


   <br><br>
    <button><a href='{{ route('services.create') }}'>Crear servicio</a></button><br><br>



