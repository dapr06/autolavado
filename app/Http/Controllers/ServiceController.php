<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('name')->get();
        return view('services/index', compact('services'));
    }

    public function create()
    {
        $services = Service::orderBy('name')->get();
        return view('services/create', compact('services'));
    }

    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'category_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'time' => 'required',
                'price' => 'required',
            ]);

            $service = new Service();
            $service->category_id = $request->category_id;
            $service->name = $request->name;
            $service->description = $request->description;
            $service->time = $request->time;
            $service->price = $request->price;
            $service->save();
            return redirect()->route('services.index');
        }
    }

    public function show(Service $service)
    {
        return view('services/show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('services/edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);

        $service->category_id = $request->category_id;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->time = $request->time;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
