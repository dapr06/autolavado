<label for='name'>  Name </label>
<input type='text' id='name' name='name' value='{{ $worker->name ?? '' }}' />
<br><br>
<label for='surname'>  Surname </label>
<input type='text' id='surname' name='surname' value='{{ $worker->surname ?? '' }}' />
<br><br>
<label for='DNI'>  DNI </label>
<input type='text' id='DNI' name='DNI' value='{{ $worker->DNI ?? '' }}' />
<br><br>
<label for='email'>  Email </label>
<input type='text' id='email' name='email' value='{{ $worker->email ?? '' }}' />
<br><br>
<label for='role'>  Role </label>
<input type='text' id='role' name='role' value='{{ $worker->role ?? '' }}' />
<br><br>
<label for="turn">Turn:</label>
<select name="turn" id="turn">
    <option value="0">Mañana</option>
    <option value="1">Tarde</option>
</select>
<br><br>
<label for="availability">Availability:</label>
<select name="availability" id="availability">
    <option value="0">Libre</option>
    <option value="1">Ocupado</option>
</select>

