<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Show products under a single category
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products; // requires Category model to have hasMany(Product)

        return view('categories.show', compact('category', 'products'));
    }
}
