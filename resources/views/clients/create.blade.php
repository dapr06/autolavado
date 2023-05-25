<x-menu/>
    <h2>Crear cliente</h2>

    <form action='{{ route('clients.store') }}' method='post'>
        @method('post')
        @csrf

        <x-clients-campos/>

        <br><br>
        <input class='button' type='submit' name='crear' value='Registrar cliente' />
    </form><br/>
<x-footer/>
