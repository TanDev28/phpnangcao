<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(ProductController::class)->group(function () {
//     Route::get('/products', 'index')->name('products.index');
//     Route::get('/products/{id}', 'show')->name('products.show');
// });

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/trash', [ProductController::class, 'trash'])->name('trash');
    Route::post('/{id}/restore', [ProductController::class, 'restore'])->name('restore');
    Route::delete('/{id}/force-delete', [ProductController::class, 'forceDelete'])->name('forceDelete');
});

Route::resource('products', ProductController::class);
