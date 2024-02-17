<?php

namespace App\Http\Controllers;

use App\Enums\OrderLog as EnumsOrderLog;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderLog;
use App\Models\Payment;
use App\Models\User;
use Devpark\Transfers24\Requests\Transfers24;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Darryldecode\Cart\CartItem;
use Darryldecode\Cart\CartCollection;
use Exception;

class PaymentController extends Controller
{
    private Transfers24 $transfers24;

    public function __construct(Transfers24 $transfers24)
    {
        $this->transfers24 = $transfers24;
    }
    
    public function status(Request $request)
    {
        $respone = $this->transfers24->receive($request);
        $payment = Payment::where('session_id', $respone->getSessionId())->firstOrFail();

        if ($respone->isSuccess()) {
            $payment->status = OrderStatus::PAID;
            $payment->save();
            Order::where('id', '=', $payment->order_id)->update(['status' => OrderStatus::PAID]);
            $order = Order::where('id', '=', $payment->order_id)->first();
            $user = User::where('id', $order->user_id)->first();
            try {
                User::where('id', $order->user_id)->update(['points' => intval($user->points) + intval($order->total)]);
            } catch (Exception) {
                User::where('id', $order->user_id)->update(['points' => intval($order->total)]);
            }
            //$email = new OrderMail($order);
            //Mail::to($order->email)->send($email->build());
            //Mail::to('admin@coffeesummit.pl')->send($email->build());
            //Mail::to('sklep@coffeesummit.pl')->send($email->build());
            //Mail::to('kontakt@coffeesummit.pl')->send($email->build());
            //Mail::to('radek.karminski@coffeesummit.pl')->send($email->build());
            //$this->createInvoice($order, 'paid');
            OrderLog::create([
                'name' => 'Przelewy24',
                'description' => 'Płatność została zrealizowana. Zmiana statusu na W trakcie realizacji',
                'type' => EnumsOrderLog::SYSTEM,
                'order_id' => $order->id,
            ]);
        } else {
            $payment->status = OrderStatus::ERROR;
            $payment->error_code = $respone->getErrorCode();
            $payment->error_description = $respone->getErrorDescription();
            $payment->save();
        }
    }
}
