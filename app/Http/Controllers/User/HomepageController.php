<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('client.index', compact('product'));
    }

    public function view($id){
        $product = Product::find($id);
        return view('client.auth.product.detail', compact('product'));
    }

    public function cartStore(Request $request) {
        $productId = $request->input('product_id');
        $quantity = $request->quantity;

        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = Cart::firstOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $productId],
            ['quantity' => 0]
        );

        $cart->quantity += $quantity;

        $cart->save();

        return redirect()->route('cart.view')->with('success', 'Product added to cart.');
    }

    public function cartView() {
        $carts = Cart::where('user_id', auth()->id())->with('product')->get();
        $total = $carts->sum(function($cart) {
            return $cart->product->price * $cart->quantity;
        });
        return view('client.auth.product.cart', compact('carts', 'total'));
    }

    public function cartDestroy($id) {
        $cart = Cart::where('user_id', auth()->id())->where('id', $id)->first();
        $cart->delete();
        return redirect()->route('cart.view')->with('success', 'Product removed from cart.');
    }

    public function checkout(){
        $carts = Cart::where('user_id', auth()->id())->with('product')->get();
        $total = $carts->sum(function($cart) {
            return $cart->product->price * $cart->quantity;
        });
        return view('client.auth.product.checkout', compact('carts', 'total'));
    }

    public function updateQuantity(Request $request, $id)
    {
        $cart = Cart::where('user_id', auth()->id())->where('id', $id)->first();
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->route('cart.view')->with('success', 'Product quantity updated.');
    }
}
