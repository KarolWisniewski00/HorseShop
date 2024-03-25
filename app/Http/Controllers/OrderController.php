<?php

namespace App\Http\Controllers;

use App\Enums\OrderLog as EnumsOrderLog;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderLog;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Setting;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Devpark\Transfers24\Requests\Transfers24;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Throwable;

class OrderController extends Controller
{

    private Transfers24 $transfers24;

    public function __construct(Transfers24 $transfers24)
    {
        $this->transfers24 = $transfers24;
    }
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
        $cartItems = \Cart::session('cart')->getContent();
        $setting = Setting::get()->pluck('content', 'type');
        $settings = Setting::get();
        $ship = $setting['payment_price'];
        return view('order.create', compact('cartItems', 'ship', 'settings'));
    }
    public function store(Request $request)
    {
        //pobierz koszyk
        $cartContent = \Cart::session('cart')->getContent();

        //sprawdź czy koszyk jest pusty
        if ($cartContent->isEmpty()) {
            return redirect()->back()->with('fail', 'Nie można złożyć zamówienia gdy koszyk jest pusty.');
        }

        //sprawdź czy użytkownik zakogowany
        try {
            $user = Auth::user();
            $usrid = $user->id;
        } catch (Throwable $e) {
            $usrid = null;
        }

        //sprawdź typ zamówienia
        if ($request->hosting == 'payment_cash') {
            $total = $request->count;
            $hosting = 'Odbiór osobisty - Brak opłat za wysyłkę';
        } elseif ($request->hosting == 'payment_shipcash') {
            $total = $request->countship;
            $hosting = 'Płatność przy odbiorze';
        } elseif ($request->hosting == 'payment_transfer24') {
            $total = $request->countship;
            $hosting = 'Płatność on-line';
        } elseif ($request->hosting == 'payment_classic') {
            $total = $request->countship;
            $hosting = 'Przelew';
        } else {
        }

        //sprawdź rabat
        $settings = Setting::get();
        $rabat = 0;
        if($request->code_rabat != null){
            foreach ($settings as $key => $value) {
                if (strpos($value->type , 'code') === 0) {
                    if($value->pl == $request->code_rabat){
                        $fv = floatval($value->content);
                        if ($fv < 1) {
                            $rv = $total * $fv;
                            $rabat = $rv;
                            $total = $total - $rv;
                        } else {
                            $total = $total - $fv;
                            $rabat = $fv;
                        }
                        
                    }
                }
            }
        }

        //utwórz zamówienie
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
            'payment_type' => $hosting,
            'status' => OrderStatus::PENDING,
        ]);

        //utwórz przedmioty zamówienia
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
        $setting = Setting::get()->pluck('content', 'type');
        $ship = $setting['payment_price'];

        //dodaj przesyłke jeśli konieczne
        if ($request->hosting == 'payment_transfer24') {
            $o = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => 0,
                'name' => 'Przesyłka',
                'price' => $ship,
                'quantity' => 1,
            ]);
        } elseif ($request->hosting == 'payment_classic') {
            $o = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => 0,
                'name' => 'Przesyłka',
                'price' => $ship,
                'quantity' => 1,
            ]);
        }

        //dodaj rabat jeśli istnieje
        if($rabat != 0){
            $o = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => 0,
                'name' => 'Kod rabatowy',
                'price' => -$rabat,
                'quantity' => 1,
            ]);
        }

        //utwórz wpis historyczny
        OrderLog::create([
            'name' => 'Klient',
            'description' => 'Utworzenie zamówienia',
            'type' => EnumsOrderLog::CLIENT,
            'order_id' => $order->id,
        ]);

        
        if ($request->hosting == 'payment_transfer24') {
            //jeśli typ płatności to p24 przejdź do p24

            return $this->paymentTransaction($order);
        } else {
            //w innym przypadku przejdź do podsumowania

            \Cart::session('cart')->clear();
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
        Breadcrumbs::for('history', function ($trail) {
            $trail->push('Historia', route('history'));
        });
        $user = Auth::user();
        $orders = OrderItem::where('order_id', $order->id)->get();
        $status = [
            'PENDING' => OrderStatus::PENDING,
            'PROGRESS' => OrderStatus::PROGRESS,
            'DONE' => OrderStatus::DONE,
            'CANCEL' => OrderStatus::CANCEL,
            'PAID' => OrderStatus::PAID,
            'CHECK' => OrderStatus::CHECK,
            'ERROR' => OrderStatus::ERROR,
        ];
        return view('order.client', compact('order', 'orders', 'status'));
    }
    private function paymentTransaction(Order $order)
    {
        $payment = new Payment();
        $payment->order_id = $order->id;
        $this->transfers24->setEmail($order->email)->setAmount($order->total);
        try {
            $response = $this->transfers24->init();
            if ($response->isSuccess()) {
                $payment->status = OrderStatus::PROGRESS;
                $payment->session_id = $response->getSessionId();
                $payment->save();
                $order->update([
                    'status' => OrderStatus::CHECK
                ]);
                OrderLog::create([
                    'name' => 'Przelewy24',
                    'description' => 'Zmiana statusu na Weryfikacja płatności.',
                    'type' => EnumsOrderLog::SYSTEM,
                    'order_id' => $order->id,
                ]);

                \Cart::session('cart')->clear();
                OrderLog::create([
                    'name' => 'Przelewy24',
                    'description' => 'Przeniesienie do zewnętrznego systemu płatności Przelewy24.',
                    'type' => EnumsOrderLog::SYSTEM,
                    'order_id' => $order->id,
                ]);
                return redirect($this->transfers24->execute($response->getToken(), false));
            } else {
                $payment->status = OrderStatus::ERROR;
                $payment->error_code = $response->getErrorCode();
                $payment->error_description = json_encode($response->getErrorDescription());
                $payment->save();
                OrderLog::create([
                    'name' => '[Błąd] Przelewy24',
                    'description' => 'Operacja przeniesienia użytkownika do zewnętrznego systemu płatności się nie powiodła',
                    'type' => EnumsOrderLog::SYSTEM,
                    'order_id' => $order->id,
                ]);
                return back()->with('fail', 'Ups. Coś poszło nie tak.');
            }
        } catch (RequestException | RequestExecutionException $error) {
            Log::error('Błąd transakcji', ['error' => $error]);
            OrderLog::create([
                'name' => '[Błąd krytyczny] Przelewy24',
                'description' => 'Operacja przeniesienia użytkownika do zewnętrznego systemu płatności się nie powiodła',
                'type' => EnumsOrderLog::SYSTEM,
                'order_id' => $order->id,
            ]);
            return back()->with('fail', 'Ups. Coś poszło nie tak.');
        }
    }
}
