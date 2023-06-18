<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Client;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MyvehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::orderBy('number_plate')->get();
        return view('myvehicles/index', compact('vehicles'));
    }

    public function create()
    {
        $clients = Client::orderBy('name')->get();
        $vehicles = Vehicle::orderBy('number_plate')->get();
        return view('myvehicles/create', compact('vehicles', 'clients'));
    }

    public function store(VehicleRequest $request)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $vehicle = new Vehicle();
        $vehicle->client_id = $request->client_id;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->interior_type = $request->interior_type;
        $vehicle->interior_color = $request->interior_color;
        $vehicle->exterior_type = $request->exterior_type;
        $vehicle->exterior_color = $request->exterior_color;
        $vehicle->save();
        return redirect()->route('myvehicles.index');
    }


    public function edit(Vehicle $vehicle)
    {
        $clients = Client::orderBy('name')->get();
        return view('myvehicles/edit', compact('vehicle', 'clients'));
    }

    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        $validatedData = $request->validate($request->rules(), $request->messages());

        $vehicle->client_id = $request->client_id;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->interior_type = $request->interior_type;
        $vehicle->interior_color = $request->interior_color;
        $vehicle->exterior_type = $request->exterior_type;
        $vehicle->exterior_color = $request->exterior_color;
        $vehicle->save();
        return redirect()->route('myvehicles.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('myvehicles.index');
    }
}
