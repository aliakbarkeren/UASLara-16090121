<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class UsersControllers extends Controller
{
    //
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('frontend.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $users = new Anggota();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
    
        $users->remember_token = bcrypt($request->email);
        $users->save();
        return redirect()->back()->with('create', 'Berhasil Menambahkan Data User');
    }

    public function ali() {

    }

}
