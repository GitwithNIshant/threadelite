<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image_url', 'parent_id'];

    // Subcategories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Products (assuming you have a products table with category_id)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
