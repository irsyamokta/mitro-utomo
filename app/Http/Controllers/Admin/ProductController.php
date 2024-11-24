<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function form(){
        return view('admin.dashboard.product.store');
    }
    public function store(){
        $store = new Product();
        $store->no_registration = request('no_registration');
        $store->name = request('name');
        $store->price = request('price');
        $store->quantity = request('quantity');
        $store->description = request('description');
        $store->composition = request('composition');
        $store->netto = request('netto');
        $store->notes = request('notes');
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $path = $file->store('uploads', 'public');
            $store->image = $path;
        }

        $store->save();
        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function view(Product $product, $id){
        $product = Product::find($id);
        return view('admin.dashboard.product.update', compact('product'));
    }

    public function update(Product $product, $id){
        $product = Product::find($id);
        $product->no_registration = request('no_registration');
        $product->name = request('name');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->description = request('description');
        $product->composition = request('composition');
        $product->netto = request('netto');
        $product->notes = request('notes');

        if (request()->hasFile('image')) {
            if ($product->image && \Storage::exists('public/' . $product->image)) {
                \Storage::delete('public/' . $product->image);
            }

            $file = request()->file('image');
            $path = $file->store('uploads', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('products')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product, $id){
        $product = Product::find($id); 
        $product->delete();
        return redirect()->route('products')->with('success', 'Product deleted successfully!');
    }
}
