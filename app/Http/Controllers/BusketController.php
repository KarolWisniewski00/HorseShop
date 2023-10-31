<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BusketController extends Controller
{
    public function get()
    {
        $cartItems = \Cart::session('cart')->getContent();
        return response()->json($cartItems);
    }
    public function add(Request $request, Product $product)
    {
        \Cart::session('cart')->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [$product->attr],
            'associatedModel' => $product,
        ]);

        return redirect()->back()->with('success', 'Produkt został dodany do koszyka.')->with('show-busket', true);
    }
    public function minus(Request $request, Product $product)
    {
        $cart = \Cart::session('cart');
        $size = Size::where('id', '=', $request->size)->first();
        $grind = Grinding::where('name', '=', $request->grind)->first();

        $currentQuantity = $cart->get(intval(strval($product->id) . strval($size->id) . strval($grind->id)))->quantity;

        if ($currentQuantity === 1) {
            // Usuń produkt z koszyka, jeśli ilość wynosi 1
            $cart->remove(intval(strval($product->id) . strval($size->id) . strval($grind->id)));
            return redirect()->back()->with('success', 'Produkt został usunięty z koszyka.');
        }

        // Zmniejsz ilość produktu o 1
        $cart->update(intval(strval($product->id) . strval($size->id) . strval($grind->id)), [
            'quantity' => -1,
        ]);

        return redirect()->back()->with('success', 'Usunięto jedną sztukę produktu z koszyka.');
    }
    public function remove(Request $request, Product $product)
    {
        $size = Size::where('id', '=', $request->size)->first();
        $grind = Grinding::where('name', '=', $request->grind)->first();

        \Cart::session('cart')->remove(intval(strval($product->id) . strval($size->id) . strval($grind->id)));

        return redirect()->back()->with('success', 'Produkt został usunięty z koszyka.');
    }
}
