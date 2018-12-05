<?php

namespace App\Http\Controllers\Admin;

use App\Stok;
use App\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
	public function index()
	{
		$pesanan = Pesanan::with('user')->get();
		return view('adminDataPesanan', [
			'pesanan' => $pesanan
		]);
	}

	public function detail($id)
	{
		$pesanan = Pesanan::find($id);
		return view('adminDetailPesanan', [
			'pesanan' => $pesanan
		]);
	}

	public function verif1(Request $request,$id)
	{
		
		$pesanan = Pesanan::find($id);
		$stok = Stok::find($pesanan->id_stok);
		$stok->jumlah = $stok->jumlah-$pesanan->jumlah_pesanan;
		$pesanan->status = 'Diverifikasi';
		$pesanan->harga = $pesanan->harga+$request->ongkos;
		$pesanan->save();
		$stok->save();
		return redirect('/data-pesanan');
	}

	public function verif2(Request $request,$id)
	{
		$pesanan = Pesanan::find($id);
		$pesanan->status = 'Dalam pengiriman';
		$pesanan->save();
		return redirect('/data-pesanan');
	}

	public function alasan_tolak($id)
	{
		return view('adminAlasanPenolakan', [
			'id' => $id
		]);
	}


	public function tolak(Request $request,$id)
	{
		$pesanan=Pesanan::find($id);
		$pesanan->alasan = $request->alasan;
		$pesanan->status = 'Ditolak';
		$pesanan->save();
		return redirect('/data-pesanan');
	}

	public function alasan($id)
	{
		return view('adminAlasanPembatalan', [
			'id' => $id
		]);
	}

	public function batal(Request $request,$id)
	{
		$pesanan=Pesanan::find($id);
		$pesanan->alasan = $request->alasan;
		$pesanan->status = 'Dibatalkan';
		$pesanan->save();
		return redirect('/data-pesanan');
	}

	public function diterima(Request $request,$id)
	{
		$pesanan=Pesanan::find($id);
		$pesanan->status = 'Diterima';
		$pesanan->save();
		return redirect('/home-kurir');
	}
}
