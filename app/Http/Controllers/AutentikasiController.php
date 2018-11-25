<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Hash;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
	public function index()
	{
		return view('autentikasi');
	}

	public function store(Request $request) //store untuk memvalidasi akun
	{
		$request->validate([
			'nama' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
		]);
		$user=User::create([
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'role' => 'pelanggan',
		]);
		Auth::login($user);
		return redirect()->route('home-pelanggan');
	}
}
