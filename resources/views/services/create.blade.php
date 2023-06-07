<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo servicio</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('services.store') }}' method='post'>
                @method('post')
                @csrf

                <x-services-campos/>
                <button class="btn btn-danger text-white">Registrar servicio</button>
                <button class="btn btn-info text-white"><a href="{{ route('services.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
