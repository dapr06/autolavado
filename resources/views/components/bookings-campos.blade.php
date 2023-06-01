<label for='service_id'> Id_service </label>
<input type='text' id='service_id' name='service_id' value='{{ $booking->service_id ?? '' }}'/>
<br>
<label for='client_id'> Id_client </label>
<input type='text' id='client_id' name='client_id' value='{{ $booking->client_id ?? '' }}'/>
<br>
<label for='vehicle_id'> Id_vehicle </label>
<input type='text' id='vehicle_id' name='vehicle_id' value='{{ $booking->vehicle_id ?? '' }}'/>
<br>
<label for='date'> Fecha </label>
<input type='text' id='date' name='date' value='{{ $booking->date ?? '' }}'/>
<br>
<label for='hour'> Hora </label>
<input type='text' id='hour' name='hour' value='{{ $booking->hour ?? '' }}'/>
<br>
<label for='number_services'> Numero de servicios </label>
<input type='text' id='number_services' name='number_services' value='{{ $booking->number_services ?? '' }}'/>
<br>
<label for='total_price'> Precio total </label>
<input type='text' id='total_price' name='total_price' value='{{ $booking->total_price ?? '' }}'/>
<br><br>
