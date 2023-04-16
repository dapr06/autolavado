<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('workers', WorkerController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('services', ServiceController::class);
Route::resource('clients', ClientController::class);
Route::resource('bookings', BookingController::class);
