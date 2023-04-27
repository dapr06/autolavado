<label for='worker_id'> Id_worker </label>
<input type='text' id='worker_id' name='worker_id' value='{{ $service->worker_id ?? '' }}'/>
<br><br>
<label for='name'> Name </label>
<input type='text' id='name' name='name' value='{{ $service->name ?? '' }}'/>
<br><br>
<label for='description'> Description </label>
<input type='text' id='description' name='description' value='{{ $service->description ?? '' }}'/>
<br><br>
<label for='price'> Price </label>
<input type='text' id='price' name='price' value='{{ $service->price ?? '' }}'/>
<br><br>
