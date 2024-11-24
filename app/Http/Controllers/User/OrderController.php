<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
        $order = new Order();
        $order->user_id = Auth::id();
        $order->payment_method = $request->payment_method;
        $order->payment_status = 'Pending';
        $order->total_price = $request->total_price;
        $order->notes = $request->notes;
        $order->status = 'Pending';
        $order->save();

        return redirect()->route('homepage')->with('success', 'Order placed successfully!');
    }
}
