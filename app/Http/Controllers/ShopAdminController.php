<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShopAdminController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return view('shop.product.index', compact('products'));
    }
    public function create()
    {
        $photos = File::files(public_path('asset/photo'));

        // Sortowanie tablicy $photos od najnowszych do najstarszych na podstawie daty utworzenia.
        usort($photos, function ($a, $b) {
            return filemtime($b) - filemtime($a);
        });

        return view('shop.product.create', compact('photos'));
    }
    public function store(Request $request)
    {

        $res = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $request->order,
            'view' => 0,
            'busket' => 0,
            'sell' => 0,
            'photo' => $request->photo,
            'price' => $request->price,
            'price_promo' => $request->price_promo,
            'visibility_on_website' => isset($request->visibility_on_website)  ? 1 : 0,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'visibility_in_google' => isset($request->visibility_in_google)  ? 1 : 0,
            'attr' => $request->category
        ]);

        if ($res) {
            return redirect()->route('admin.products')
                ->with('success', 'Produkt został dodany.');
        } else {
            return redirect()->route('admin.products.create')
                ->with('fail', 'Wystąpił błąd podczas dodawania produktu.');
        }
    }

    public function edit(Product $product)
    {
        $photos = File::files(public_path('asset/photo'));

        // Sortowanie tablicy $photos od najnowszych do najstarszych na podstawie daty utworzenia.
        usort($photos, function ($a, $b) {
            return filemtime($b) - filemtime($a);
        });

        return view('shop.product.edit', compact('photos', 'product'));
    }

    public function update(Request $request, Product $product)
    {
        // Aktualizujemy dane produktu
        $res = $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $request->order,
            'photo' => $request->photo,
            'price' => $request->price,
            'price_promo' => $request->price_promo,
            'visibility_on_website' => isset($request->visibility_on_website)  ? 1 : 0,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'visibility_in_google' => isset($request->visibility_in_google)  ? 1 : 0,
            'attr' => $request->category
        ]);

        if ($res) {
            return redirect()->route('admin.products')
                ->with('success', 'Produkt został zaktualizowany.');
        } else {
            return redirect()->route('admin.products.edit', $product->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania produktu.');
        }
    }

    public function delete(Product $product)
    {
        $res = $product->delete();
        if ($res) {
            return redirect()->route('admin.products')
                ->with('success', 'Produkt został usunięty.');
        } else {
            return redirect()->route('admin.products')
                ->with('fail', 'Wystąpił błąd podczas usuwania produktu.');
        }
    }
}
