<h2>Registrar vehículos</h2>


<form action='{{ route('vehicles.store') }}' method='post'>
    @method('post')
    @csrf

    <x-vehicles-campos/>

    <br><br>

    <input class='button' type='submit' name='crear' value='Registrar vehículo' />
</form><br/>