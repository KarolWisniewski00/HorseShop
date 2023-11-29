<?php

namespace App\Http\Controllers;

use App\Enums\OrderLog as EnumsOrderLog;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderLog;
use App\Models\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Throwable;

class OrderController extends Controller
{
    private function getOrderNumber()
    {
        $currentYear = date('y');
        $autoIncrementedId = Order::max('id') + 1;
        return $autoIncrementedId . '/' . $currentYear;
    }
    public function create()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('shop', function ($trail) {
            $trail->push('Sklep', route('shop'));
        });

        Breadcrumbs::for('busket', function ($trail) {
            $trail->push('Podsumowanie koszyka', route('busket'));
        });

        Breadcrumbs::for('order.create', function ($trail) {
            $trail->push('Płatności', route('order.create'));
        });
        return view('order.create');
    }
    public function store(Request $request)
    {
        if ($request->type_transfer == 'false' && $request->type_transfer_24 == 'false') {
            return redirect()->back()->with('fail', 'Administrator nie ustawił formy płatności. Przepraszamy za utrudnienia.');
        }

        $cartContent = \Cart::session('cart')->getContent();

        if ($cartContent->isEmpty()) {
            return redirect()->back()->with('fail', 'Nie można złożyć zamówienia gdy koszyk jest pusty.');
        }
        try {
            $user = Auth::user();
            $usrid = $user->id;
        } catch (Throwable $e) {
            $usrid = null;
        }

        $total = \Cart::session('cart')->getTotal();

        $order = Order::create([
            'number' => $this->getOrderNumber(),
            'url' => Str::random(4),
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company ? $request->company : null,
            'nip' => $request->nip,
            'post' => $request->post,
            'adres' => $request->street,
            'adres_extra' => $request->street_extra,
            'city' => $request->city,
            'phone' => $request->phone,
            'extra' => $request->extra,
            'user_id' => $usrid,
            'total' => $total,
            'status' => OrderStatus::PENDING,
        ]);

        foreach ($cartContent as $item) {
            $o = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->quantity,
            ]);
            $product = Product::where('name', $item->name)->firstOrFail();
            $product->update(['sell' => intval($product->sell) + $item->quantity]);
        }
        OrderLog::create([
            'name' => 'Klient',
            'description' => 'Utworzenie zamówienia',
            'type' => EnumsOrderLog::CLIENT,
            'order_id' => $order->id,
        ]);
        if ($request->type_transfer_24 == 'true') {
            return '$this->paymentTransaction($order)';
        } elseif ($request->type_transfer == 'true') {
            \Cart::session('cart')->clear();

            // Wyślij e-mail
            return redirect()->route('order.show', $order->url)->with('success', 'Dziękujemy, zamówienie zostało złożone.');
        }
    }
    public function show($slug)
    {
        $order = Order::where('url', $slug)->first();
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('account', function ($trail) {
            $trail->push('Konto', route('profile'));
        });
        Breadcrumbs::for('order', function ($trail) {
            $trail->push('Zamówienie', route('order.create'));
        });

        $user = Auth::user();
        $orders = OrderItem::where('order_id', $order->id)->get();
        return view('order.client', compact('order', 'orders'));
    }
}
