<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all(); // fetch all brands
        return view('brands.index', compact('brands'));
    }
}