<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('app');

// Show all categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Show all products under one category (example: /category/polo-t-shirt)
Route::get('/category/{slug}', [ProductController::class, 'showCategory'])->name('category.show');

// Show a single product (example: /product/classic-polo-t-shirt)
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('products.show');

// New route for color variants
Route::get('/products/color-variant', [ProductController::class, 'getProductByColor'])->name('products.by-color');