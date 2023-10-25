<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = $slug;
        $products = [];
        return view('shop.product.show',compact('product','products'));
    }
}
