<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('date')->get();
        return view('bookings/index', compact('bookings'));
    }

    public function create()
    {
        $bookings = Booking::orderBy('date')->get();
        return view('bookings/create', compact('bookings'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'client_id' => 'required',
            'vehicle_id' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'number_services' => 'required',
            'total_price' => 'required',
        ]);

        $booking = new Booking();
        $booking->service_id = $request->service_id;
        $booking->client_id = $request->client_id;
        $booking->vehicle_id = $request->vehicle_id;
        $booking->date = $request->date;
        $booking->hour = $request->hour;
        $booking->number_services = $request->number_services;
        $booking->total_price = $request->total_price;
        $booking->save();
        return redirect()->route('bookings.index');
    }

    public function show(Booking $booking)
    {
        return view('bookings/show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('bookings/edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'client_id' => 'required',
            'vehicle_id' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'number_services' => 'required',
            'total_price' => 'required',
        ]);

        $booking->service_id = $request->service_id;
        $booking->client_id = $request->client_id;
        $booking->vehicle_id = $request->vehicle_id;
        $booking->date = $request->date;
        $booking->hour = $request->hour;
        $booking->number_services = $request->number_services;
        $booking->total_price = $request->total_price;
        $booking->save();
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
