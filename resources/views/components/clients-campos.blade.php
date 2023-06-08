<label for="name">Nombre<span style="color: red">*</span></label>
<input type="text" id="name" name="name" value="{{ old('name', isset($client) ? $client->name : '') }}">

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="surname">Apellidos<span style="color: red">*</span></label>
<input type="text" id="surname" name="surname" value="{{ old('surname', isset($client) ? $client->surname : '') }}">

@error('surname')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="phone">Teléfono<span style="color: red">*</span></label>
<input type="text" id="phone" name="phone" value="{{ old('phone', isset($client) ? $client->phone : '') }}">

@error('phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="email">Correo electrónico<span style="color: red">*</span></label>
<input type="text" id="email" name="email" value="{{ old('email', isset($client) ? $client->email : '') }}">

@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
