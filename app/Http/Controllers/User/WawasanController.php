<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class WawasanController extends Controller
{
    public function index(){
        $video = Content::all()->where('type', 'Video');
        $document = Content::all()->where('type', 'Dokumen Wawasan');
        return view('client.auth.wawasan.index', compact('video', 'document'));
    }
}
