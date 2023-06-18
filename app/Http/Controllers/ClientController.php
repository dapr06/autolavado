<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\User;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('name')->get();
        return view('clients/index', compact('clients'));
    }

    public function create()
    {
        $clients = Client::orderBy('name')->get();
        return view('clients/create', compact('clients'));
    }

    public function store(ClientRequest $request)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $client = new Client();
        $client->name = $validatedData['name'];
        $client->surname = $validatedData['surname'];
        $client->phone = $validatedData['phone'];
        $client->email = $validatedData['email'];
        $client->save();

        // Crear el usuario correspondiente al cliente
        $user = new User();
        $user->name = $client->name;
        $user->surname = $client->surname;
        $user->phone = $client->phone;
        $user->email = $client->email;
        $user->password = bcrypt('123456789'); // Contraseña predeterminada (puedes cambiarla)
        $user->save();

        // Asignar el ID del usuario al cliente
        $client->user_id = $user->id;
        $client->save();

        return redirect()->route('clients.index');
    }


    public function show(Client $client)
    {
        return view('clients/show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('clients/edit', compact('client'));
    }

    public function update(ClientRequest $request, Client $client)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->save();
        return redirect()->route('clients.index');
    }
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
