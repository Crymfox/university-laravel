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

Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('/success', function () {
    return ('<h1>Success</h1>');
})->name('success');
Route::get('/products/list', [App\Http\Controllers\ProductController::class, 'index'])->name('products.list');
Route::get('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('/products/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
