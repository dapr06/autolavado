<x-app-layout>
    <h2>Registrar vehículos</h2>

    <form action='{{ route('vehicles.store') }}' method='post'>
        @method('post')
        @csrf

        <x-vehicles-campos/>

        <input class='button' type='submit' name='crear' value='Registrar vehículo' />
    </form><br/>
</x-app-layout>
