<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Para estar registrados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//SOLO ADM PUEDE VER CATEGORIAS Y TRABAJADORES
Route::middleware(['auth', 'can:view-workers'])->group(function () {
    Route::resource('workers', WorkerController::class);
});
Route::middleware(['auth', 'can:view-categories'])->group(function () {
    Route::resource('categories', CategoryController::class);
});
Route::middleware(['auth', 'can:view-services'])->group(function () {
    Route::resource('services', ServiceController::class);
});

//PUEDEN ACCEDER ADM Y ROL
Route::middleware(['auth', 'can:view-bookings'])->group(function () {
    Route::resource('bookings', BookingController::class);
});
Route::middleware(['auth', 'can:view-vehicles'])->group(function () {
    Route::resource('vehicles', VehicleController::class);
});
Route::middleware(['auth', 'can:view-clients'])->group(function () {
    Route::resource('clients', ClientController::class);
});

require __DIR__.'/auth.php';

// Para no estar registrados y que se pueda ver
/*Route::get('/services', function () {
    $services = \App\Models\Service::orderBy('id')->get();
    $categories = Category::orderBy('category')->get();

    return view('/services/index', compact('services', 'categories'));
})->name('services.index');*/
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');


Route::get('/contacts', function () {
    return view('/contacts/index');
})->name('contacts.index');


// routes/web.php

Route::group(['middleware' => 'auth'], function () {
    // Rutas para el carrito de compras
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
});
