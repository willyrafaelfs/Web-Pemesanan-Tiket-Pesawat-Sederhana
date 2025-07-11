<?php

namespace App\Http\Controllers;
use App\Models\pemesanan;
use App\Models\penerbangan;
use Illuminate\Http\Request;

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
        $penerbangan = penerbangan::all();
        return view('home', compact('penerbangan'));
    }
}
