<x-menu/>
<div class="container">
    <br><h1 class="text-center">Servicios de tu reserva</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre del servicio</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Precio</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($booking->services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->time }} min</td>
                        <td>{{ $service->price }} €</td>
                    </tr>
                @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-info text-white"><a href="{{ route('bookings.index') }}" class="text-white">Volver</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
