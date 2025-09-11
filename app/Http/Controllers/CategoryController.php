<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        // fetch all categories (you can paginate or limit if needed)
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    // Show a single category with subcategories + products
    public function show($slug)
    {
        // Find category with children (subcategories)
        $category = Category::where('slug', $slug)
            ->with('children') // eager load subcategories
            ->firstOrFail();

        // If you have products related to category
        $products = $category->products ?? collect();

        return view('categories.show', compact('category', 'products'));
    }
}
