<x-app-layout>
    <h1>Listado de servicios</h1>


    <p>Name: {{$service->name}}</p>
    <p>Description: {{$service->description}}</p>
    <p>Time: {{$service->time}}</p>
    <p>Price: {{$service->price}}</p>

    <a href='{{ route('services.edit', $service) }}'>Editar servicio</a>
    <br/><br/>

    <form id='{{ $service->id }}' action='{{ route('services.destroy', $service) }}' method='post'>
        @method('delete')
        <input class='button' type='submit' name='crear' value='Eliminar servicio'/>
    </form>
    <br>
    <a href='{{ route('services.index') }}'>Volver al listado de servicios.</a>
</x-app-layout>
