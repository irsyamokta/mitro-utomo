<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\Content;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->count();
        $products = Product::count();
        $reviews = Review::count();
        $sales = 0;
        $revenue = 0; 

        $ratingCounts = [
            1 => Review::where('rating', 1)->count(),
            2 => Review::where('rating', 2)->count(),
            3 => Review::where('rating', 3)->count(),
            4 => Review::where('rating', 4)->count(),
            5 => Review::where('rating', 5)->count(),
        ];

        $totalReviews = array_sum($ratingCounts); 
        $ratingPercentages = [];

        if ($totalReviews > 0) {
            foreach ($ratingCounts as $rating => $count) {
                $ratingPercentages[$rating] = ($count / $totalReviews) * 100;
            }
        } else {
            $ratingPercentages = array_fill(1, 5, 0);
        }

        $orders = Order::where('payment_status', 'Lunas')->get();

        foreach ($orders as $order) {
            $productDetails = $order->product_details;

            if (is_string($productDetails)) {
                $productDetails = json_decode($productDetails, true);
            }

            if (is_array($productDetails) && !empty($productDetails)) {
                foreach ($productDetails as $product) {
                    $sales += $product['quantity'];
                    $revenue += $product['price'] * $product['quantity'];
                }
            }
        }

        return view('admin.dashboard.index', compact('users', 'products', 'sales', 'revenue', 'ratingCounts', 'ratingPercentages'));
    }

    public function users(){
        $users = User::all()->where('role', 'user');
        $admin = User::all()->where('role', 'admin');
        return view('admin.dashboard.user.users', compact('users', 'admin'));
    }

    public function viewUser($id){
        $user = User::find($id);
        return view('admin.dashboard.user.update', compact('user'));
    }

    public function updateUser(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users')->with('success', 'User updated.');
    }

    public function destroyUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')->with('success', 'User deleted.');
    }
    
    public function reviews(){
        $users = User::all()->where('role', 'user');
        return view('admin.dashboard.reviews', compact('users'));
    }

    public function products(){
        $products = Product::all();
        return view('admin.dashboard.product.products', compact('products'));
    }

    public function content(){
        $content = Content::all();
        return view('admin.dashboard.content.contents', compact('content'));
    }

    public function review(){
        $review = Review::all();
        return view('admin.dashboard.reviews', compact('review')); 
    }
}