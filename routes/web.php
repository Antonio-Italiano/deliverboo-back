<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
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
    return view('guest.welcome');
});

Route::get('/home', function () {
    return view('admin.restaurants.index');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
Route::resource('restaurants', App\Http\Controllers\RestaurantController::class);
Route::resource('typologies', App\Http\Controllers\TypologyController::class);
Route::resource('foods', App\Http\Controllers\FoodController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::patch('/foods/{food}/toggle', [FoodController::class, 'toggle'])->name('foods.toggle');
});