<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id', 'category_id', 'name', 'slug', 'sku', 
        'primary_image_url', 'price', 'description', 
        'size', 'color_code', 'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    // Relationships
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Helper methods for color variants
    public function getColorVariants()
    {
        return Product::where('name', $this->name)
                     ->where('is_active', true)
                     ->with('images')
                     ->get();
    }

    public function getAvailableSizesForColor($colorCode = null)
    {
        $color = $colorCode ?? $this->color_code;
        
        return Product::where('name', $this->name)
                     ->where('color_code', $color)
                     ->where('is_active', true)
                     ->distinct()
                     ->pluck('size');
    }
}