<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $res = $product->update([
            'view' => $product->view+1,
        ]);
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('shop', function ($trail) {
            $trail->push('Sklep', route('shop'));
        });

        Breadcrumbs::for('shop.product.show', function ($trail, $productId) {
            $trail->push('Produkt', route('product.show', $productId));
        });
        $products = Product::where('visibility_on_website',True)->orderBy('created_at', 'desc')->take(3)->get();
        return view('shop.product.show', compact('product', 'products'));
    }
}
