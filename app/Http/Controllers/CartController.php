<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Vehicle;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Obtén el ID del servicio enviado desde el formulario
        $serviceId = $request->input('service_id');

        // Encuentra el servicio en la base de datos
        $service = Service::findOrFail($serviceId);

        // Desactiva el servicio seleccionado
        $service->update(['active' => false]);

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
        $cartItems = auth()->user()->cartItems;
        $vehicles = auth()->user()->clientVehicles()->orderBy('number_plate')->get();
        return view('cart.show', compact('cartItems', 'vehicles'));
    }


}
