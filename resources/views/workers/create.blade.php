<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo trabajador</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('workers.store') }}' method='post'>
                @method('post')
                @csrf

                <x-workers-campos/>
                <button>Registrar trabajador</button>
                <a href='{{ route('workers.index') }}'>Volver al listado de trabajadores</a>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
