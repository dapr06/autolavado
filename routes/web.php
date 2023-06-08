<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WorkerController;
use App\Models\User;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Para estra registrados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('services', ServiceController::class);
});

require __DIR__.'/auth.php';


//Para No estar resgistrados y que se pueda ver
Route::get('/services', function (){
    $services = \App\Models\Service::orderBy('id')-> get();
    return view('/services/index', compact('services'));
})->name('services.index');
Route::get('/contacts', function (){
    return view('/contacts/index');
})->name('contacts.index');


//solo para los roles TRA y ADM
Route::middleware(['auth', 'can:viewVehicles'])->group(function () {
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/create', [VehicleController::class, 'index'])->name('vehicles.create');
    Route::get('/vehicles/show', [VehicleController::class, 'index'])->name('vehicles.show');
    Route::get('/vehicles/edit', [VehicleController::class, 'index'])->name('vehicles.edit');
});
Route::middleware(['auth', 'can:viewClients'])->group(function () {
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'index'])->name('clients.create');
    Route::get('/clients/show', [ClientController::class, 'index'])->name('clients.show');
    Route::get('/clients/edit', [ClientController::class, 'index'])->name('clients.edit');
});
Route::middleware(['auth', 'can:viewBookings'])->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/create', [BookingController::class, 'index'])->name('bookings.create');
    Route::get('/bookings/show', [BookingController::class, 'index'])->name('bookings.show');
    Route::get('/bookings/edit', [BookingController::class, 'index'])->name('bookings.edit');
});

//SOLO rol ADM
Route::middleware(['auth'])->group(function () {
    // Rutas para categorías
    Route::middleware(['can:viewCategories'])->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::get('/categories/show', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    });

    // Rutas para trabajadores
    Route::middleware(['can:viewWorkers'])->group(function () {
        Route::get('/workers', [WorkerController::class, 'index'])->name('workers.index');
        Route::get('/workers/create', [WorkerController::class, 'create'])->name('workers.create');
        Route::get('/workers/show', [WorkerController::class, 'show'])->name('workers.show');
        Route::get('/workers/edit', [WorkerController::class, 'edit'])->name('workers.edit');
    });
});



