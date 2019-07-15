<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileprogController extends Controller
{
    public function index()
    {
        $post = Postingan::orderBy('created_at','desc')->get();
        

        return view('frontend.mobile', compact('post'));
    }
}
