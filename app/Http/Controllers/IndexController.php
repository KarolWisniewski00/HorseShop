<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $product = Product::where('visibility_on_website',True)->orderBy('created_at', 'desc')->first();
        $products = Product::where('visibility_on_website',True)->orderBy('created_at', 'desc')->take(3)->get();
        $suplements = Product::where('visibility_on_website',True)->where('attr','suplement')->orderBy('created_at', 'desc')->take(3)->get();
        $oils = Product::where('visibility_on_website',True)->where('attr','oil')->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('product','products','suplements','oils'));
    }
}
