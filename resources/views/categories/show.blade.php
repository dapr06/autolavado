<x-menu/>
<div class="container">
    <br><h1 class="text-center">Categoría: {{$category->category}} </h1><br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form id='{{ $category->id }}' action='{{ route('categories.destroy', $category) }}' method='post'>
                        <p>Categoría: {{$category->category}}</p>

                        <button class="btn btn-primary text-white"><a href="{{ route('categories.edit', $category) }}" class="text-white">Editar</a></button>
                        <button class="btn btn-info text-white"><a href="{{ route('categories.index') }}" class="text-white">Volver</a></button>

                        @method('delete')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer/>
