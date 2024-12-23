<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use App\Models\Order;
use Midtrans\Config;
use Illuminate\Support\Facades\Auth;

class MidtransController extends Controller
{
    public function index()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $user = Auth::user();

        $orders = Order::where('user_id', $user->id)
            ->latest()
            ->first();

        if(!$orders) {
            return view('client.auth.payments.status', compact( 'orders'));
        }

        if ($orders && $orders->payment_status == 'Lunas') {
            return view('client.auth.payments.status', compact( 'orders'));
        }

        $params = [
            'transaction_details' => [
                'order_id' => $orders->order_id,
                'gross_amount' => $orders->total_price,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return view('client.auth.payments.status', compact('snapToken', 'orders'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create transaction: ' . $e->getMessage()], 500);
        }
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('SHA512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::where('order_id', $request->order_id)->first();
                $order->payment_status = 'Lunas';
                $order->save();
            } else {
                $order = Order::where('order_id', $request->order_id)->first();
                $order->payment_status = 'Dibatalkan';
                $order->save();
            }
            return redirect()->route('order.detail')->with('success', 'Transaction status updated successfully!');
        }
    }
}
