<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return view('shop.index', compact('products'));
    }
}