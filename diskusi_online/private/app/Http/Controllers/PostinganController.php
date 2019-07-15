<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Postingan;
class PostinganController extends Controller
{
    public function index()
    {
        
    }

    public function create(Request $request)
    {
        return view('frontend.post');

    }
    public function post(Request $request)
    {
        $postingan = new Postingan();
        $postingan->judul = $request->judul;
        $postingan->kategori = $request->kategori;
        $postingan->isi = $request->isi;
        
    
        
        $postingan->save();
        return redirect()->route('home')->with('create', 'Posted');
    }

    public function edit($id)
    {
        $post = Postingan::findorFail($id);
        $post->edit();
        return view('frontend.edit', compact('post'));
    }

    
    public function delete($id){
        $post = Postingan::findOrFail($id);
        $post->delete();
        return redirect()->route('kelola-postingan');
    }

}
