<label for='category_id'> Id categoria </label>
<input type='text' id='category_id' name='category_id' value='{{ $service->category_id ?? '' }}'/>
<br>
<label for='name'> Nombre </label>
<input type='text' id='name' name='name' value='{{ $service->name ?? '' }}'/>
<br>
<label for='description'> Descripción </label>
<input type='text' id='description' name='description' value='{{ $service->description ?? '' }}'/>
<br>
<label for='time'> Duración </label>
<input type='text' id='time' name='time' value='{{ $service->time ?? '' }}'/>
<br>
<label for='price'> Precio </label>
<input type='text' id='price' name='price' value='{{ $service->price ?? '' }}'/>
<br><br>
