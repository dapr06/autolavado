<label for='name'>  Nombre </label>
<input type='text' id='name' name='name' value='{{ $worker->name ?? '' }}' />
<br>
<label for='surname'>  Apellido </label>
<input type='text' id='surname' name='surname' value='{{ $worker->surname ?? '' }}' />
<br>
<label for='DNI'>  DNI </label>
<input type='text' id='DNI' name='DNI' value='{{ $worker->DNI ?? '' }}' />
<br>
<label for='email'>  Correo electrónico </label>
<input type='text' id='email' name='email' value='{{ $worker->email ?? '' }}' />
<br>
<label for='role'>  Rol </label>
<input type='text' id='role' name='role' value='{{ $worker->role ?? '' }}' />
<br>
<label for="turn">Turno:</label>
<select name="turn" id="turn">
    <option value="0">Mañana</option>
    <option value="1">Tarde</option>
</select>
<br>
<label for="availability">Disponibilidad:</label>
<select name="availability" id="availability">
    <option value="0">Libre</option>
    <option value="1">Ocupado</option>
</select>
<br><br>
