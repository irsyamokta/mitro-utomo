<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function form(){
        return view('admin.dashboard.content.store');
    }

    public function store(){
        $store = new Content();
        $store->title = request('title');
        $store->link = request('link');
        $store->type= request('type');

        $store->save();
        return redirect()->route('content')->with('success', 'Content added successfully!');
    }

    public function view(Content $content, $id){
        $content = Content::find($id);
        return view('admin.dashboard.content.update', compact('content'));
    }

    public function update(Content $content, $id){
        $content = Content::find($id);
        $content->title = request('title');
        $content->link = request('link');
        $content->type= request('type');

        $content->save();
        return redirect()->route('content')->with('success', 'Content added successfully!');
    }

    public function destroy(Content $content, $id){
        $content = Content::find($id); 
        $content->delete();
        return redirect()->route('content')->with('success', 'Content deleted successfully!');
    }
}
