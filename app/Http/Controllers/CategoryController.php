<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        $categories = Category::all(); // Paginate if needed: ->paginate(20);

        return view('categories.index', compact('categories'));
    }

    // Show a single category with subcategories + products (filtered by color if requested)
    public function show($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        // Base query
        $productsQuery = $category->products()->where('is_active', 1);

        // Filter by color if requested
        $selectedColor = $request->get('color');
        if ($selectedColor) {
            $productsQuery->where('color_code', $selectedColor);
        }

        // ✅ Change to paginate() instead of get() – e.g., 12 items per page
        $products = $productsQuery->orderBy('created_at', 'desc')->paginate(12);

        // For colors/sizes/brands, use ->get() since we need all for filters
        $colors = $category->products()
            ->whereNotNull('color_code')
            ->where('is_active', 1)
            ->distinct()
            ->pluck('color_code')
            ->toArray();

        $sizes = $category->products()
            ->whereNotNull('size')
            ->where('is_active', 1)
            ->distinct()
            ->pluck('size')
            ->toArray();

        $brands = $category->products()
            ->with('brand')
            ->where('is_active', 1)
            ->get()
            ->pluck('brand')
            ->filter()
            ->unique('id');

        return view('categories.show', compact('category', 'products', 'colors', 'sizes', 'brands', 'selectedColor'));
    }
}