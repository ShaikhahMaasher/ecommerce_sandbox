<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

class ShopController extends Controller
{
    public function index() {
        return view('shop.index');
    }
    public function productDetails($slug) {
        $product = Product::where('slug', $slug)->first();        
        return view('shop.product', compact('product'));
    }
}
