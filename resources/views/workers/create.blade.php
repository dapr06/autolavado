<h2>Crear trabajadores</h2>


<form action='{{ route('workers.store') }}' method='post'>
    @method('post')
    @csrf

    <x-workers_campo />

    <br><br>

    <input class='button' type='submit' name='crear' value='Crear trabajador' />
</form><br/>
