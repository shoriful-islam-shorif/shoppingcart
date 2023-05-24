<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productController;

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


Auth::routes();

Route::get('/', [productController::class, 'index']);



Route::get('/cart', [productController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [productController::class, 'addToCart'])->name('add.to.cart');

Route::get('/update-cart/{id}', [productController::class, 'update'])->name('update-cart');
Route::patch('/update-cart', [productController::class, 'update'])->name('update.cart');
Route::delete('/remove-form-cart', [productController::class, 'remove'])->name('remove.form.cart');

//admin
Route::get('/admin', [productController::class, 'admin'])->name('admin');
Route::get('/add-product', [productController::class, 'AddProduct'])->name('add-product');
Route::post('/add-product', [productController::class, 'addItem'])->name('add-product');

Route::get('/delete/{id}', [productController::class, 'deleteItem'])->name('delete');

Route::get('/update/{id}', [productController::class, 'editItem'])->name('update');
Route::post('/update/{id}', [productController::class, 'updateItem'])->name('update');









