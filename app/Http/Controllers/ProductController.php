<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('shop.product.show',compact('product','products'));
    }
}
