<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KurirController extends Controller
{
	public function index()
	{
		$user = User::where('role', '=', 'kurir')->paginate(5);
		return view('adminDataKurir', [
			'user' => $user
		]);
	}
	public function tambah()
	{
		return view('adminTambahKurir');
	}
	public function simpan(Request $request)
	{
		$kurir = new User();
		$kurir->nama = $request->nama;
		$kurir->email = $request->email;
		$kurir->password = $request->password;
		$kurir->jenisKelamin = $request->jeniskelamin;
		$kurir->alamat = $request->alamat;
		$kurir->nohp = $request->nohp;
		$kurir->role = 'kurir';
		$kurir->save();
		return redirect()->route('data-kurir');
	}
}
