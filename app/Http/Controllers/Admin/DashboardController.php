<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Content;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->where('role', 'user')->count();
        $products = Product::all()->count();
        return view('admin.dashboard.index', compact('users', 'products'));
    }

    public function users(){
        $users = User::all()->where('role', 'user');
        return view('admin.dashboard.users', compact('users'));
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
}
