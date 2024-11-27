<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

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

        return view('client.auth.orders.status', compact('orders'));
    }

    public function checkout(Request $request){
        $user = Auth::user();

        DB::beginTransaction();

        try {
            $totalPrice = 0;

            $carts = Cart::where('user_id', $user->id)->get();
            $productDetails = [];

            foreach ($carts as $cart) {
                $product = Product::findOrFail($cart->product_id);

                if ($product->quantity < $cart->quantity) {
                    throw new \Exception("Stok tidak mencukupi untuk produk: " . $product->name);
                }
    
                $totalPrice += $product->price * $cart->quantity;
    
                $product->decrement('quantity', $cart->quantity);

                $productDetails[] = [
                    'name'     => $product->name,
                    'quantity' => $cart->quantity,
                    'price'    => $product->price,
                    'subtotal' => $cart->quantity * $product->price,
                    'image'    => $product->image,
                ];
            }
            
            Order::create([
                'user_id'        => $user->id,
                'product_details' => json_encode($productDetails),
                'payment_method' => $request->payment_method,
                'payment_status' => 'Belum dibayar',
                'resi'           => 'Resi belum dibuat',
                'quantity'       => $request->quantity,
                'notes'          => $request->notes ?? '',
                'total_price'    => $product->price * $cart->quantity,
                'status'         => 'Pending',
            ]);

            Cart::where('user_id', $user->id)->delete();
            DB::commit();

            return redirect()->route('order.detail')->with('success', 'Checkout berhasil!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat proses checkout: ' . $e->getMessage());
        }
    }

    public function confirm($id){
        $order = Order::find($id);
        $order->status = 'Selesai';
        $order->save();
        return redirect()->route('order.detail');
    }
}
