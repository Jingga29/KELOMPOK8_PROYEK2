<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pembelian;
use App\Models\Penjualan;
use App\Models\RugiBulanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    $users = User::count();
    $totalHarga = Pembelian::sum(DB::raw('jumlah_ikan * harga_ikan'));
    $totalPenjualan = Penjualan::sum(DB::raw('jumlah * harga'));
    $rugi_bulanan = RugiBulanan::all();
    
    $widget = [
        'users' => $users,
        'totalHarga' => $totalHarga,
        'totalPenjualan' => $totalPenjualan,
        'rugi_bulanan' => $rugi_bulanan,
    ];

    return view('home', compact('widget'));
}

    
}
