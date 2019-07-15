<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postingan;
use App\Komentar;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Postingan::orderBy('created_at', 'desc')->get();
        

        return view('frontend.home', compact('post'));
    }

    public function show()
    {
        $post = Postingan::all();

        return view('pages.kelola-postingan', compact('post'));
    }

    public function view()
    {
        $komen = Komentar::all();

        return view('pages.kelola-komentar', compact('komen'));
    }

    public function komen($id)
    {
        $post = Postingan::find($id);
        $komen = Komentar::where('id', $id);
        $komen = Komentar::find($id);

        return view('frontend.komen', compact('post', 'komen'));
    }
}
