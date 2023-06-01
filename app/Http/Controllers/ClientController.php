<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->phone = $request->phone;
        $client->email = $request->email;
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

    public function update(Request $request, Client $client)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

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
