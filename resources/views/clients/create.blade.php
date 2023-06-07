<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo cliente</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('clients.store') }}' method='post'>
                @method('post')
                @csrf

                <x-clients-campos/>

                <button class="btn btn-danger text-white">Registrar cliente</button>
                <button class="btn btn-info text-white"><a href="{{ route('clients.index') }}" class="text-white">Volver</a></button><br><br>
            </form>
        </div>
    </div>
</div>
<x-footer/>
