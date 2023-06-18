<label for='name'>  Nombre<span class="required">*</span></label>
<input type="text" id="name" name="name" value="{{ old('name', isset($worker) ? $worker->name : '') }}">
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for='surname'>  Apellido<span class="required">*</span></label>
<input type='text' id='surname' name='surname' value="{{ old('surname', isset($worker) ? $worker->surname : '') }}">
@error('surname')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for='DNI'>  DNI<span class="required">*</span></label>
<input type='text' id='DNI' name='DNI' value="{{ old('DNI', isset($worker) ? $worker->DNI : '') }}">
@error('DNI')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for='email'>  Correo electrónico<span class="required">*</span></label>
<input type='text' id='email' name='email' value="{{ old('email', isset($worker) ? $worker->email : '') }}">
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="role">Rol<span class="required">*</span></label>
<input type="text" id="role" name="role" value="TRA" readonly>
@error('role')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="turn">Turno<span class="required">*</span></label>
<select name="turn" id="turn">
    <option value="0" <?php if(old('turn', isset($turn) ? $turn : '') == 0) echo 'selected'; ?>>Mañana</option>
    <option value="1" <?php if(old('turn', isset($turn) ? $turn : '') == 1) echo 'selected'; ?>>Tarde</option>
</select>
@error('turn')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<br><br>
