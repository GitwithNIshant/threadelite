<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
class HomeController extends Controller
{
   public function index()
    {
        $brands = Brand::take(20)->get(); // 20 brand cards
        $categories = Category::take(16)->get(); // 16 category cards

        return view('home', compact('brands', 'categories'));
    }
    
}
