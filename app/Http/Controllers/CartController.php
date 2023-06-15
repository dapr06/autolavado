<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Service;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Obtén el ID del servicio enviado desde el formulario
        $serviceId = $request->input('service_id');

        // Encuentra el servicio en la base de datos
        $service = Service::findOrFail($serviceId);

        // Crea un nuevo elemento en el carrito para el usuario autenticado
        auth()->user()->cartItems()->create([
            'service_id' => $serviceId,
            'quantity' => 1, // Puedes ajustar la cantidad según tus necesidades
            'price' => $service->price,
        ]);

        // Redirige al usuario a la página del carrito o a donde desees
        return redirect()->route('cart.view')->with('success', 'El servicio se ha añadido al carrito.');
    }


    public function removeFromCart($cartItemId)
    {
        // Encuentra y elimina el elemento del carrito
        $cartItem = Cart::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('cart.view');
    }

    public function viewCart()
    {
        // Obtén los elementos del carrito del usuario autenticado
        $cartItems = auth()->user()->cartItems;

        // Puedes pasar los elementos del carrito a la vista
        return view('cart.view', ['cartItems' => $cartItems]);
    }
}

