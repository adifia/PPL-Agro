<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
    	return view('profile');
    }

    public function edit()
    {
    	return view('edit-profile');
    }

    public function save(Request $request)
    {
    	$id=Auth::id();
    	$user=User::find($id);
    	$user->nama = $request->nama;
    	$user->email = $request->email;
    	$user->jenisKelamin = $request->jeniskelamin;
    	$user->alamat = $request->alamat;
    	$user->nohp = $request->nohp;
    	$user->save();
    	return redirect('/profil');
    }
}
