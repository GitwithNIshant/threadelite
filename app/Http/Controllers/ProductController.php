<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showCategory($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $productsQuery = Product::where('category_id', $category->id)->where('is_active', 1);

        $selectedColor = $request->get('color');
        if ($selectedColor) {
            $productsQuery->where('color_code', $selectedColor);
        }

        $products = $productsQuery->orderBy('created_at', 'desc')->get();

        $colors = Product::where('category_id', $category->id)
                         ->whereNotNull('color_code')
                         ->where('is_active', 1)
                         ->distinct()
                         ->pluck('color_code')
                         ->toArray();

        $sizes = Product::where('category_id', $category->id)
                        ->whereNotNull('size')
                        ->where('is_active', 1)
                        ->distinct()
                        ->pluck('size')
                        ->toArray();

        // Fixed brands (assumes relation)
        $brandsQuery = Product::where('category_id', $category->id)
                              ->where('is_active', 1)
                              ->with('brand');
        $brands = $brandsQuery->get()->pluck('brand')->filter()->unique('id');

        return view('products.category', compact('category', 'products', 'colors', 'sizes', 'brands', 'selectedColor'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['images', 'brand', 'category'])->firstOrFail();
        
        // Get all color variants of this product (same name, different colors)
        $colorVariants = Product::where('name', $product->name)
                               ->where('is_active', 1)
                               ->with('images')
                               ->get();
        
        // Get available sizes for current color
        $availableSizes = Product::where('name', $product->name)
                                ->where('color_code', $product->color_code)
                                ->where('is_active', 1)
                                ->distinct()
                                ->pluck('size');

        return view('products.show', compact('product', 'colorVariants', 'availableSizes'));
    }
    
    public function getProductByColor(Request $request)
    {
        $productName = $request->input('product_name');
        $colorCode = $request->input('color_code');
        
        $product = Product::where('name', $productName)
                         ->where('color_code', $colorCode)
                         ->with(['images', 'brand', 'category'])
                         ->first();
        
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found for this color'
            ], 404);
        }
        
        $availableSizes = Product::where('name', $product->name)
                                ->where('color_code', $colorCode)
                                ->where('is_active', 1)
                                ->distinct()
                                ->pluck('size');
        
        return response()->json([
            'success' => true,
            'product' => $product,
            'images' => $product->images,
            'primary_image' => $product->images->where('is_primary', true)->first() ?? $product->images->first(),
            'available_sizes' => $availableSizes,
            'color_code' => $colorCode
        ]);
    }
}