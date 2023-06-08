<label for='client_id'>Id cliente</label>
<select id='client_id' name='client_id'>
    @foreach ($clients as $client)
        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->surname }}</option>
    @endforeach
</select>
<br>
<label for='number_plate'>Matrícula</label>
<input type='text' id='number_plate' name='number_plate' value='{{ $vehicle->number_plate ?? '' }}' />
<br>
<label for='interior_type'>Interior</label>
<input type='text' id='interior_type' name='interior_type' value='{{ $vehicle->interior_type ?? '' }}' />
<br>
<label for='color'>Color</label>
<input type='text' id='color' name='color' value='{{ $vehicle->color ?? '' }}' />
<br><br>
