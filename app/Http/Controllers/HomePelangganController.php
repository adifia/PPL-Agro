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
    	$pesanan = Pesanan::where('status', '=', 'Dalam pengiriman')->orWhere('status', '=', 'Diterima')->orderBy('updated_at', 'desc')->get();
    	return view('kurir', [
    		'pesanan' => $pesanan
    	]);
    }

    public function pemilik(Request $request)
    {
    	$pesanan = Pesanan::where('status', '=', 'Diterima')->orderBy('updated_at', 'desc')->get();
    	if ($request->query('bulan')) {
    		$pesanan = Pesanan::where('status', '=', 'Diterima')
    		->whereMonth('updated_at', '=', $request->query('bulan'))
    		->whereYear('updated_at', '=', $request->query('tahun'))
    		->orderBy('updated_at', 'desc')->get();
    	}
    	return view('home-pemilik', [
    		'pesanan' => $pesanan
    	]);
    }


    
}
