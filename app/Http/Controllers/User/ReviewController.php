<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($id){
        $user = Auth::user();
        $order = Order::where('id', $id)
            ->where('user_id', $user->id)
            ->where('status', 'Selesai')
            ->first();

        if (!$order) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan atau belum selesai.');
        }

        $productDetails = is_string($order->product_details) 
            ? json_decode($order->product_details, true)
            : $order->product_details;

        return view('client.auth.reviews.index', compact('order', 'productDetails'));
    }

    public function store(Request $request){
        $review = new Review();
        $review->order_id = $request->order_id;
        $review->name = $request->name;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return redirect()->route('order.detail');
    }

    public function view(){
        $review = DB::table('reviews')
            ->whereIn('id', function($query) {
                $query->selectRaw('MAX(id)')
                    ->from('reviews')
                    ->groupBy('order_id');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('client.auth.testimoni.index', compact('review'));
    }
}
