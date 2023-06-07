<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo trabajador</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('workers.store') }}' method='post'>
                @method('post')
                @csrf

                <x-workers-campos/>
                <button class="btn btn-danger text-white">Registrar trabajador</button>
                <button class="btn btn-info text-white"><a href="{{ route('workers.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
