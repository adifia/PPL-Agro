<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function index()
    {
    	$user = User::paginate(5);
    	return view('adminDataPelanggan', [
    		'user' => $user
    		]);
    }

    public function detail($id)
    {
    	$user = User::find($id);
    	return view('adminDetailUser', [
    		'user' => $user
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
}