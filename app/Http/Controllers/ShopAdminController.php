<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopAdminController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return view('shop.product.index', compact('products'));
    }
    public function create()
    {
        return view('shop.product.create');
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
            'photo' => 'photos',
            'visibility_on_website' => isset($request->visibility_on_website)  ? 1 : 0,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'visibility_in_google' => isset($request->visibility_in_google)  ? 1 : 0,
        ]);

        if ($res) {
            return redirect()->route('dashboard.shop.product')
                ->with('success', 'Produkt został dodany.');
        } else {
            return redirect()->route('dashboard.shop.product.create')
                ->with('fail', 'Wystąpił błąd podczas dodawania produktu.');
        }
    }

    public function edit(Product $product)
    {
        $sizes = Size::get();
        $grindTypes = Grinding::get();
        $photos = File::files(public_path('photo'));
        $productSizes = ProductVariant::where('product_id', $product->id)->where('size_id', '!=', null)->get();
        $productGrinds = ProductVariant::where('product_id', $product->id)->where('grinding_id', '!=', null)->get();
        $productPhotos = ProductImage::where('product_id', $product->id)->first();

        // Sortowanie tablicy $photos od najnowszych do najstarszych na podstawie daty utworzenia.
        usort($photos, function ($a, $b) {
            return filemtime($b) - filemtime($a);
        });
        return view('admin.shop.product.edit', compact('product', 'sizes', 'grindTypes', 'photos', 'productSizes', 'productGrinds', 'productPhotos'));
    }

    public function update(CreateProductRequest $request, Product $product)
    {
        // Aktualizujemy dane produktu
        $res = $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $request->order,
            'visibility_on_website' => isset($request->visibility_on_website)  ? 1 : 0,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'visibility_in_google' => isset($request->visibility_in_google)  ? 1 : 0,
        ]);
        // Usuwamy wszystkie stare warianty produktu i zapisujemy nowe dane
        $prices = $request->price;
        $grinds = $request->grind;

        ProductVariant::where('product_id', $product->id)->delete();
        if (!empty($prices)) {
            foreach ($prices as $key => $price) {
                if ($price != null) {
                    $variant = new ProductVariant([
                        'product_id' => $product->id,
                        'size_id' => $key + 1,
                        'grinding_id' => null,
                        'price' => $price
                    ]);
                    $variant->save();
                }
            }
        }

        if (!empty($grinds)) {
            foreach ($grinds as $grind) {
                $variant = new ProductVariant([
                    'product_id' => $product->id,
                    'grinding_id' => $grind,
                    'size_id' => null,
                    'price' => null
                ]);
                $variant->save();
            }
        }

        ProductImage::where('product_id', $product->id)->update([
            'image_path' => $request->photo,
        ]);
        if ($res) {
            return redirect()->route('dashboard.shop.product')
                ->with('success', 'Produkt został zaktualizowany.');
        } else {
            return redirect()->route('dashboard.shop.product.edit', $product->id)
                ->with('fail', 'Wystąpił błąd podczas aktualizowania produktu.');
        }
    }

    public function delete(Product $product)
    {
        $res = $product->delete();
        if ($res) {
            return redirect()->route('dashboard.shop.product')
                ->with('success', 'Produkt został usunięty.');
        } else {
            return redirect()->route('dashboard.shop.product')
                ->with('fail', 'Wystąpił błąd podczas usuwania produktu.');
        }
    }
}
