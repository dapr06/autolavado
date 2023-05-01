<x-app-layout>
    <h2>Crear reserva</h2>

    <form action='{{ route('bookings.store') }}' method='post'>
        @method('post')
        @csrf

        <x-bookings-campos/>

        <br><br>
        <input class='button' type='submit' name='crear' value='Registrar reserva' />
    </form><br/>
</x-app-layout>
