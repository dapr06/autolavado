<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WorkerController;
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

Route::get('/services', function () {
    return view('services');
})->middleware(['auth', 'verified'])->name('services');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('workers', WorkerController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('bookings', BookingController::class);

});

require __DIR__.'/auth.php';

Route::get('/services', function (){
    $services = \App\Models\Service::orderBy('id')-> get();
    return view('/services/index', compact('services'));
})->name('services.index');

Route::get('/contacts', function (){
    return view('/contacts/index');
})->name('contacts.index');

