<x-menu/>

<div class="container">
    <br>
    <h1 class="text-center">Carrito de Compras</h1><br>

    <div class="row">
        <div class="col-md-12">
            @if($cartItems->isEmpty())
                <p>No hay servicios en el carrito.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <td>{{ $cartItem->service->name }}</td>
                            <td>{{ $cartItem->quantity }}</td>
                            <td>{{ $cartItem->service->price }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

<x-footer/>
