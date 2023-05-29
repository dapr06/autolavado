<label for='vehicle_id'> Id_vehicle </label>
<input type='text' id='vehicle_id' name='vehicle_id' value='{{ $client->vehicle_id ?? '' }}'/>
<br>
<label for='name'> Nombre </label>
<input type='text' id='name' name='name' value='{{ $client->name ?? '' }}'/>
<br>
<label for='surname'> Apellido </label>
<input type='text' id='surname' name='surname' value='{{ $client->surname ?? '' }}'/>
<br>
<label for='phone'> Teléfono </label>
<input type='text' id='phone' name='phone' value='{{ $client->phone ?? '' }}'/>
<br>
<label for='email'> Correo electrónico </label>
<input type='text' id='email' name='email' value='{{ $client->email ?? '' }}'/>
<br><br>
