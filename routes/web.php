<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PastOrdersController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/home', [HomePageController::class, 'home'])->name('home');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::post('/addToBasket', [BasketController::class, 'addToBasket'])->name('addToBasket');
Route::post('/removeFromBasket', [BasketController::class, 'removeFromBasket'])->name('removeFromBasket');
Route::post('/updateSizeBasket', [BasketController::class, 'updateSizeBasket'])->name('updateSizeBasket');


Route::get('/contactus', [ContactUsController::class, 'contactUs'])->name('contactUs');

Route::get('/aboutus', [AboutUsController::class, 'aboutUs'])->name('aboutUs');

Route::get('/items', [ItemsController::class, 'items'])->name('items');

Route::get('/pastOrders', [PastOrdersController::class, 'pastOrders'])->name('pastOrders');
Route::post('/pastOrders', [PastOrdersController::class, 'addToPastOrders'])->name('addToPastOrders');

Route::get('/admin', [AdminController::class, 'adminPage'])->name('adminPage');








require __DIR__.'/auth.php';
