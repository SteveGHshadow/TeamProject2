<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [ItemsController::class, 'home'])->name('home');
Route::get('/items', [ItemsController::class, 'items'])->name('items');
Route::get('/basket', [OrdersController::class, 'basket'])->name('basket');



require __DIR__.'/auth.php';
