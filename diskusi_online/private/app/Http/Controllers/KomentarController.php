<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
     public function create(Request $request)
    {
        return view('frontend.komen');

    }

    public function komentar(Request $request)
    {
        $komentar = new Komentar();
        
        
        $komentar->isi = $request->isi;
        

        $komentar->save();
        return redirect()->route('komentar')->with('create', 'Posted');
        
    }
}
