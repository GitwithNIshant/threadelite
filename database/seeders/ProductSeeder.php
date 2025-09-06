<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // ⚠️ NOTE: You don’t need this if you already have data in MySQL.
        // This is just a placeholder in case you want to auto-generate products later.

        // Example: if you want to seed dynamically from arrays or API
        $products = [
            [
                'name' => 'Demo Product',
                'category_slug' => 't-shirts',  // must match categories.slug
                'price' => 0,
                'img' => 'https://via.placeholder.com/800x800.png?text=Product'
            ]
        ];

        foreach ($products as $data) {
            $category = Category::where('slug', $data['category_slug'])->first();
            $brand = Brand::first(); // pick any available brand

            if (!$category || !$brand) {
                continue; // skip if not found
            }

            $product = Product::create([
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'description' => 'Auto-generated product placeholder',
                'price' => $data['price'],
                'brand_id' => $brand->id,
                'category_id' => $category->id,
                'primary_image_url' => $data['img'],
                'is_active' => 1,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image_url' => $data['img'],
                'is_primary' => 1,
            ]);
        }
    }
}
