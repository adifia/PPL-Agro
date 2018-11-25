<?php

namespace App\Http\Controllers;
use App\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
	public function index()
	{
		return view('mahasiswa',[
			'title'=>'Data Mahasiswa',
			'data'=>Mahasiswa::all()
		]);
	}
}