<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\MainController::class, "main"]);

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, "product"]);

Route::get('/products', function () {
    return view('admin/admin');
});

Route::get('/admin', [\App\Http\Controllers\AdminController::class, "main"]);

Route::get('/create', [\App\Http\Controllers\AdminController::class, "createProduct"]);

Route::post('/store', [\App\Http\Controllers\AdminController::class, "store"]);






