<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::orderBy('number_plate')->get();
        return view('vehicles/index', compact('vehicles'));
    }

    public function create()
    {
        $vehicles = Vehicle::orderBy('number_plate')->get();
        return view('vehicles/create', compact('vehicles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'number_plate' => 'required',
            'interior_type' => 'required',
            'color' => 'required',
        ]);

        $vehicle = new Vehicle();
        $vehicle->number_plate = $request->number_plate;
        $vehicle->interior_type = $request->interior_type;
        $vehicle->color = $request->color;
        $vehicle->save();
        return redirect()->route('vehicles.index');
    }

    public function show(Vehicle $vehicle)
    {
        $vehicles = Vehicle::orderBy('number_plate')->get();
        return view('vehicles/show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles/edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $this->validate($request, [
            'number_plate' => 'required',
            'interior_type' => 'required',
            'color' => 'required',
        ]);

        $vehicle->number_plate = $request->number_plate;
        $vehicle->interior_type = $request->interior_type;
        $vehicle->color = $request->color;
        $vehicle->save();
        return redirect()->route('vehicles.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}
