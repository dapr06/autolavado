<x-menu/>
<div class="container catFooter">
    <br><h1 class="text-center">Esta editando la categoría: {{$category->category}}</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('categories.update', $category)}}' method='post'>
                @method('put')
                <label for='category'> Categoría<span class="required">*</span></label>
                <input type='text' id='category' name='category' value="{{ old('category', isset($category) ? $category->category : '') }}">

                @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button class="btn btn-danger">Actualizar</button>
                <button class="btn btn-info text-white"><a href="{{ route('categories.index') }}" class="text-white">Volver</a></button>
            </form>
        </div>
    </div>
</div>
<x-footer/>
