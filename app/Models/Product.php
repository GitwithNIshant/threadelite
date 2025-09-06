<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
use HasFactory;


protected $fillable = [
'brand_id','category_id','name','slug','sku','primary_image_url','price','description','is_active'
];


public function brand()
{
return $this->belongsTo(Brand::class);
}


public function category()
{
return $this->belongsTo(Category::class);
}


public function images()
{
return $this->hasMany(ProductImage::class);
}
}