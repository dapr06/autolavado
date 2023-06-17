<x-menu/>

<div class="container">
    <br>
    <h1 class="text-center">Información de la compra</h1><br>
    @if($cartItems->isEmpty())
        <p class="cartFooter">No hay ningún servicios en el carrito.</p>
    @else
        <div class="card">
            <div class="card-body bodyServiceWo">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-center">Servicios seleccionados</h4><br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th hidden>Cantidad</th>
                                    <th>Duración aprox</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $totalQuantity = 0;
                                    $totalTime = 0;
                                    $totalPrice = 0;
                                @endphp
                                @foreach($cartItems as $cartItem)
                                    <tr>
                                        <td>{{ $cartItem->service->name }}</td>
                                        <td hidden>{{ $cartItem->quantity }}</td>
                                        <td>{{ $cartItem->service->time }} min</td>
                                        <td>{{ $cartItem->service->price }} €</td>
                                        <td>
                                            <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $totalQuantity += $cartItem->quantity;
                                        $totalTime += $cartItem->service->time;
                                        $totalPrice += $cartItem->service->price;
                                        $horas = floor($totalTime / 60);
                                        $minutos = $totalTime % 60;
                                    @endphp
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center">Vehículo seleccionado</h4><br>

                    </div>
                </div>
                <br>
              {{--  <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Resumen de la compra</h1><br>
                    </div>
                </div>--}}
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-center">Resumen de los servicios</h4><br>
                        <p>Cantidad de servicios: {{ $totalQuantity }}<br>
                        @if($minutos == 0)
                            Tiempo total: {{ $horas }} h
                        @else
                            Tiempo total: {{ $horas }} h {{ $minutos }} minutos
                        @endif
                        <br>Precio total: {{ $totalPrice }} €</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Método de pago</h4><br>
                        <p>Seleccione el método de pago</p>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodoPago" id="pagoTarjeta" value="tarjeta" checked>
                            <label class="form-check-label" for="pagoTarjeta">
                                Pago con tarjeta
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodoPago" id="pagoEfectivo" value="efectivo">
                            <label class="form-check-label" for="pagoEfectivo">
                                Pago con efectivo
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center">Información de contacto</h4><br>
                        <p class="text-justify">Para cualquier consulta no dude en contartar con nosotros atraves del número <strong>645789123</strong> o por correo electrónico
                            en la pagina de Contacto mediante el formulario</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<x-footer/>
