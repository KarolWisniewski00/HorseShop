<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'desc')->first();
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('product','products'));
    }
}
