<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->get();
        foreach ($orders as $order) {
            $productDetails = $order->product_details;

            if (is_string($productDetails)) {
                $productDetails = json_decode($productDetails, true);
            }

            $order->total_price = 0;
            $order->total_products = 0;

            if (is_array($productDetails) && !empty($productDetails)) {
                foreach ($productDetails as $product) {
                    $order->total_price += $product['price'] * $product['quantity'];
                    $order->total_products += $product['quantity'];
                }
            }
        }

        return view('admin.dashboard.order.orders', compact('orders'));
    }

    public function view(Order $order, $id){
        $order = Order::find($id);
        return view('admin.dashboard.order.update', compact('order'));
    } 

    public function update(Request $request, $id){
        $order = Order::find($id);
        $order->resi = $request->resi;
        $order->status = $request->status;
        $order->save();
        return redirect()->route('orders');
    }
}
