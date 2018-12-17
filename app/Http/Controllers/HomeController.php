<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == "admin") {
            return view('home', [
                'active' => 'beranda',
                'title' => 'Selamat datang Admin',
                'keterangan' => 'Sistem Informasi Pemesanan Ikan Lele'
            ]);
            
        }elseif ($user->role == "pelanggan") {
            return redirect('/home-pelanggan');
        }elseif ($user->role == "kurir"){
            return redirect('/home-kurir');    
        }elseif ($user->role == 'pemilik'){
            return redirect('/home-pemilik');
        }
        
    }
}
