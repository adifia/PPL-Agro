<?php

namespace App\Http\Controllers;

use App\User;
use App\Kabupaten;
use App\Kecamatan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profile', [
            'title' => 'Profil pengguna',
            'keterangan' => 'Detail',
            'active' => 'profil'
        ]);
    }

    public function edit()
    {
    	$kab = Kabupaten::all();
        $kec = Kecamatan::all();
        return view('edit-profile', [
            'kabupaten' => $kab, 
            'kecamatan' => $kec,
            'active' => 'profil',
            'title' => 'Profil pengguna',
            'keterangan' => 'Edit profil',
        ]);
    }

    public function save(Request $request)
    {
    	$id=Auth::id();
        $kec=Kecamatan::find($request->kecamatan);
        $kab=Kabupaten::find($request->kabupaten);
    	$user=User::find($id);
    	$user->nama = $request->nama;
    	$user->email = $request->email;
    	$user->jenisKelamin = $request->jeniskelamin;
    	$user->alamat = $request->alamat.', kecamatan '.$kec->kecamatan.', kabupaten '.$kab->kabupaten;
    	$user->nohp = $request->nohp;
    	$user->save();
    	return redirect('/profil');
    }

    public function kecamatan($id_kabupaten)
    {
        return Kecamatan::where('id_kabupaten', '=', $id_kabupaten)->get();
    }
}
