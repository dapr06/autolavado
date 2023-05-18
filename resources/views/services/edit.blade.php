<x-app-layout>
    <h1> Edita servicio {{$service->name}}</h1>
    <br>
    <form action='{{route('services.update',$service)}}' method='post'>
        @method('put')

        <label for='name'>Name </label>
        <input id='name' name='name' type='text' value='{{ $service->name }}'>
        <br><br>
        <label for='description'>Description </label>
        <input id='description' name='description' type='text' value='{{ $service->description }}'>
        <br><br>
        <label for='time'>Time </label>
        <input id="time" name='time' type='text' value='{{$service->time}}'>
        <br><br>
        <label for='price'>Price </label>
        <input id='price' name='price' type='text' value='{{ $service->price }}'>
        <br><br>
        <input class='button' type='submit' name='actualizar' value='Actualizar'/>
    </form>

    <a href='{{ route('services.index') }}'>Ir al listado de servicios</a>
</x-app-layout>
