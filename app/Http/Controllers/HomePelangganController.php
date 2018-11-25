<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\User;
use Illuminate\Http\Request;

class HomePelangganController extends Controller
{
    public function index()
    {
    	$user=User::all();
    	return view('home-pelanggan', [
    		'user' => $user
    		]);
    }

    public function kurir()
    {
    	$pesanan = Pesanan::where('status', '=', 'Dalam pengiriman')->get();
    	return view('kurir', [
    		'pesanan' => $pesanan
    	]);
    }

    
}
