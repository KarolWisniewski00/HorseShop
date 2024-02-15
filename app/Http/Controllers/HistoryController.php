<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    function index(){
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('account', function ($trail) {
            $trail->push('Konto', route('profile'));
        });
        Breadcrumbs::for('history', function ($trail) {
            $trail->push('Historia', route('history'));
        });
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->paginate(10);
        $status = [
            'PENDING' => OrderStatus::PENDING,
            'PROGRESS' => OrderStatus::PROGRESS,
            'DONE' => OrderStatus::DONE,
            'CANCEL' => OrderStatus::CANCEL,
            'PAID' => OrderStatus::PAID,
            'CHECK' => OrderStatus::CHECK,
            'ERROR' => OrderStatus::ERROR,
        ];
        return view('history', compact('orders', 'status'));
    }
}
