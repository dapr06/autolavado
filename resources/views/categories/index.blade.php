<x-menu/>
<div class="container">
    <br><h1 class="text-center">Categorías registradas</h1><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Categorías</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td><a href='{{ route('categories.show', $category) }}'>{{ $category->category }}</a></td>
                        <td>
                            <form action='{{ route('categories.destroy', $category) }}' method='post'>
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">X</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table><br>
            <button class="btn btn-primary text-white"><a href="{{ route('categories.create') }}" class="text-white">Registrar categoría</a></button><br><br>
        </div>
    </div>
</div>
<x-footer/>
