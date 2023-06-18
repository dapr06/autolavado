<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Client;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:9'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'CLI',
        ]);

        if ($user->role === 'CLI') {
            $clientData = [
                'name' => $request->name, // Nombre del cliente
                'surname' => $request->surname,
                'phone' => $request->phone,
                'email' => $request->email, // Valor para la columna "email" del cliente
                // Otros datos del cliente que deseas guardar
            ];

            $client = new Client($clientData);
            $user->client()->save($client);


            $client->user()->associate($user);
            $client->save();
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

}
