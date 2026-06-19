<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// redirect root ke /products
Route::get('/', function () {
    return redirect('/products');
});

// gunakan resource route untuk CRUD produk
Route::resource('products', ProductController::class);
