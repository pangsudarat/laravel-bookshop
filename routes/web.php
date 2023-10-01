<?php

use App\Http\Controllers\Bookcontroller;
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

Route::get('/home', [Bookcontroller::class, 'index']);
Route::get('/shopping.cart',[Bookcontroller::class, 'bookCart'])->name('shopping.cart');
Route::get('/book/{id}', [Bookcontroller::class, 'addBooktocart'])->name('addbook.to.cart');
Route::delete('/delete-cart-product', [Bookcontroller::class, 'deleteProduct'])->name('delet.cart.product');