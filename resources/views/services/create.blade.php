<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo servicio</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('services.store') }}' method='post'>
                @method('post')
                @csrf

                <x-services-campos/>

                <br><br>
                <input class='button' type='submit' name='crear' value='Crear servicio' />
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
