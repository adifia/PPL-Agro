<?php

namespace App\Http\Controllers\Admin;
use App\Stok;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
    	$user = User::where('role', '=', 'pelanggan')->orderBy('created_at', 'desc')->paginate(5);
    	return view('adminDataPelanggan', [
    		'user' => $user,
            'active' => 'pelanggan',
            'title' => 'Data Pelanggan',
            'keterangan' => 'Sistem Informasi Pemesanan Ikan Lele'
        ]);
    }

    public function detail($id)
    {
    	$user = User::find($id);
    	return view('adminDetailUser', [
    		'user' => $user,
            'active' => 'pelanggan',
            'title' => 'Detail Pelanggan',
            'keterangan' => 'Sistem Informasi Pemesanan Ikan Lele'
    	]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('adminEditUser', [
            'user' => $user
        ]);
    }

    public function simpan(Request $request, $id)
    {
        $user=User::find($id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->jenisKelamin = $request->jeniskelamin;
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('detail-data', $id);
    }

    public function coba()
    {
        $user = User::paginate(5);
        return view('pelanggan.index', [
            'user' => $user
        ]);
    }

    public function stok()
    {
        $stok = Stok::all();
        return view('pelangganStok', [
            'stok' => $stok,
            'title' => 'Stok',
            'keterangan' => 'Stok ikan tersedia',
            'active' => 'stok'
        ]);
    }
}
