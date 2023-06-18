<x-menu/>
<div class="container">
    <br><h1 class="text-center">Registrar un nuevo vehículo</h1>
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('myvehicles.store') }}' method='post'>
                @method('post')
                @csrf
                <label for='client_id'>Propietario/a<span class="required">*</span></label>
                <select id='client_id' name='client_id'>
                    <option value="{{ auth()->user()->client->id }}">{{ auth()->user()->client->name }} {{ auth()->user()->client->surname }}</option>
                </select>

                <label for='number_plate'>Matrícula<span class="required">*</span></label>
                <input type='text' id='number_plate' name='number_plate' value="{{ old('number_plate', isset($vehicle) ? $vehicle->number_plate : '') }}">
                @error('number_plate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='interior_type'>Tipo de interior<span class="required">*</span></label>
                <select id='interior_type' name='interior_type'>
                    <option value="cuero" {{ old('interior_type') == 'cuero' ? 'selected' : '' }}>Cuero</option>
                    <option value="sintético" {{ old('interior_type') == 'sintético' ? 'selected' : '' }}>Sintético</option>
                    <option value="tela" {{ old('interior_type') == 'tela' ? 'selected' : '' }}>Tela</option>
                    <option value="alcantara" {{ old('interior_type') == 'alcantara' ? 'selected' : '' }}>Alcantara</option>
                </select>
                @error('interior_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='interior_color'>Color del interior<span class="required">*</span></label>
                <input type='text' id='interior_color' name='interior_color' value="{{ old('interior_color', isset($vehicle) ? $vehicle->interior_color : '') }}">
                @error('interior_color')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='exterior_type'>Tipo de exterior<span class="required">*</span></label>
                <select id='exterior_type' name='exterior_type'>
                    <option value="pintura" {{ old('exterior_type') == 'pintura' ? 'selected' : '' }}>Pintura</option>
                    <option value="vinilo" {{ old('exterior_type') == 'vinilo' ? 'selected' : '' }}>Vinilo</option>
                </select>
                @error('exterior_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for='exterior_color'>Color del exterior<span class="required">*</span></label>
                <input type='text' id='exterior_color' name='exterior_color' value="{{ old('exterior_color', isset($vehicle) ? $vehicle->exterior_color : '') }}">
                @error('exterior_color')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button class="btn btn-danger text-white">Registrar vehículo</button>
                <button class="btn btn-info text-white"><a href="{{ route('myvehicles.index') }}" class="text-white">Volver</a></button><br><br>
            </form><br/>
        </div>
    </div>
</div>
<x-footer/>
