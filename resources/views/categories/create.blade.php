<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar una nueva categoría</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('categories.store') }}' method='post'>
                @method('post')
                @csrf
                <label for='category'> Categoría<span class="required">*</span></label>
                <input type='text' id='category' name='category' value="{{ old('category', isset($category) ? $category->category : '') }}">

                @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br><br>
                <button class="btn btn-danger text-white">Registrar categoría</button>
                <button class="btn btn-info text-white"><a href="{{ route('categories.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
