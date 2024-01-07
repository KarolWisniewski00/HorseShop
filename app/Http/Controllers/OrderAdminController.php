<?php

namespace App\Http\Controllers;

use App\Enums\OrderLog as EnumsOrderLog;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAdminController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(20);
        $status = [
            'PENDING' => OrderStatus::PENDING,
            'PROGRESS' => OrderStatus::PROGRESS,
            'DONE' => OrderStatus::DONE,
            'CANCEL' => OrderStatus::CANCEL,
            'PAID' => OrderStatus::PAID,
        ];
        return view('dashboard', compact('orders', 'status'));
    }
    public function show(Order $order)
    {
        $user = Auth::user();
        $orders = OrderItem::where('order_id', $order->id)->get();
        $order = Order::where('id', $order->id)->first();
        $order_logs = OrderLog::where('order_id', $order->id)->get();
        return view('order.show', compact('order', 'orders', 'order_logs'));
    }
    public function status($id, $slug)
    {
        $user = Auth::user();
        switch ($slug) {
            case 0:
                $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::PENDING)]);
                OrderLog::create([
                    'name' => $user->name,
                    'description' => 'Zmiana statusu na:' . OrderStatus::PENDING,
                    'type' => EnumsOrderLog::ADMIN,
                    'order_id' => $id,
                ]);
                break;
            case 1:
                $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::PROGRESS)]);
                OrderLog::create([
                    'name' => $user->name,
                    'description' => 'Zmiana statusu na:' . OrderStatus::PROGRESS,
                    'type' => EnumsOrderLog::ADMIN,
                    'order_id' => $id,
                ]);
                break;
            case 2:
                $order = Order::where('id', '=', $id)->first();
                $user = User::where('id', $order->user_id)->first();
                User::where('id', $order->user_id)->update(['points' => intval($user->points) + $order->total]);
                $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::DONE)]);
                OrderLog::create([
                    'name' => $user->name,
                    'description' => 'Zmiana statusu na:' . OrderStatus::DONE,
                    'type' => EnumsOrderLog::ADMIN,
                    'order_id' => $id,
                ]);
                break;
            case 3:
                $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::CANCEL)]);
                OrderLog::create([
                    'name' => $user->name,
                    'description' => 'Zmiana statusu na:' . OrderStatus::CANCEL,
                    'type' => EnumsOrderLog::ADMIN,
                    'order_id' => $id,
                ]);
                break;
            case 5:
                $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::PAID)]);
                OrderLog::create([
                    'name' => $user->name,
                    'description' => 'Zmiana statusu na:' . OrderStatus::PAID,
                    'type' => EnumsOrderLog::ADMIN,
                    'order_id' => $id,
                ]);
                break;
            case 6:
                    $res = Order::where('id', '=', $id)->update(['status' => strval(OrderStatus::CANCEL)]);
                    OrderLog::create([
                        'name' => $user->name,
                        'description' => 'Zmiana statusu na:' . OrderStatus::CANCEL,
                        'type' => EnumsOrderLog::ADMIN,
                        'order_id' => $id,
                    ]);
                    return back();
                    break;
        }
        if ($res) {
            return redirect()->route('dashboard.order.show', $id)->with('success', 'Status został pomyślnie zapisany.');
        } else {
            return redirect()->route('dashboard.order.show', $id)->with('fail', 'Status nie został zapisany.');
        }
    }
}
