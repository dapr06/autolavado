<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo cliente</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('clients.store') }}' method='post'>
                @method('post')
                @csrf

                <x-clients-campos/>
                <button>Registrar cliente</button>
                <a href='{{ route('clients.index') }}'>Volver al listado de clientes</a>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
