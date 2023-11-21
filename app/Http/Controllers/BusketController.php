<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;

class BusketController extends Controller
{
    function index(){
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('shop', function ($trail) {
            $trail->push('Sklep', route('shop'));
        });

        Breadcrumbs::for('busket', function ($trail) {
            $trail->push('Podsumowanie koszyka', route('busket'));
        });
        $cartItems = \Cart::session('cart')->getContent();
        return view('busket', compact('cartItems'));
    }
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

        return redirect()->back()->with('success', 'Produkt został dodany do koszyka.')->with('busket-show', 'busket-show');
    }
    public function minus(Request $request, Product $product)
    {
        $cart = \Cart::session('cart');


        $currentQuantity = $cart->get($product->id)->quantity;

        if ($currentQuantity === 1) {
            // Usuń produkt z koszyka, jeśli ilość wynosi 1
            $cart->remove($product->id);
            return redirect()->back()->with('success', 'Produkt został usunięty z koszyka.');
        }

        // Zmniejsz ilość produktu o 1
        $cart->update($product->id, [
            'quantity' => -1,
        ]);
        return redirect()->back()->with('success', 'Usunięto jedną sztukę produktu z koszyka.');
    }
    public function remove(Request $request, Product $product)
    {
        \Cart::session('cart')->remove($product->id);

        return redirect()->back()->with('success', 'Produkt został usunięty z koszyka.');
    }
}
