<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    // Show a single product by ID
    public function show($id)
    {
        $product = Product::with('brand', 'category', 'images')->findOrFail($id);

        return view('products.show', compact('product'));
    }
}
