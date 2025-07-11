<?php

namespace App\Http\Controllers;
use App\Models\pemesanan;
use App\Models\penerbangan;
use Illuminate\Http\Request;

class CheckoutController extends Controller
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
    public function index($id)
    {
        $penerbangan = penerbangan::where('id_penerbangan', $id)->first();
        return view('checkout.index', compact('penerbangan'));
    }
}
