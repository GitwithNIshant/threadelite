<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Show all categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Show products under one category
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// Show single product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

