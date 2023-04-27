<h2>Crear servicio</h2>


<form action='{{ route('services.store') }}' method='post'>
    @method('post')
    @csrf

    <x-services-campos/>

    <br><br>

    <input class='button' type='submit' name='crear' value='Crear servicio' />
</form><br/>
