<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomenController extends Controller
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
        return redirect()->back()->with('create', 'Posted');
        
    }

    public function delete($id){
        $komen = Komentar::findOrFail($id);
        $komen->delete();
        return redirect()->route('kelola-komentar');
    }
}
