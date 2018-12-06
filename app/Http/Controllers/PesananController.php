<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pesanan;
use App\Stok;

class PesananController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$id = Auth::id();
		$pesanan = Pesanan::where('id_user', '=', $id)->get();

		return view('pelangganPesanan', [
			'pesanan' => $pesanan,
			'active' => 'pesanan',
			'title' => 'Pesanan',
			'keterangan' => 'Pesanan anda'
		]);
	}
	public function buat()
	{
		$stok = Stok::all();
		return view('pelangganBuatPesanan', [
			'stok' => $stok,
			'active' => 'pesanan',
			'title' => 'Pesanan',
			'keterangan' => 'Buat pesanan'
		]);
	}
	public function simpan(Request $request)
	{
		
		$stok = Stok::where('ukuran',$request->ukuran)->first();
		$rules = [
			'jumlah'=>'numeric|max:'.$stok->jumlah,
		];
		$request->validate($rules);
		$id=Auth::id();

		$pesanan = new Pesanan();
		$pesanan->ukuran = $request->ukuran;
		$pesanan->harga = $request->jumlah*$stok->harga;
		$pesanan->jumlah_pesanan = $request->jumlah;
		$pesanan->alamat = $request->alamat;
		$pesanan->id_user = $id;
		$pesanan->id_stok = $stok->id;
		$pesanan->status = 'Menunggu verifikasi';
		$pesanan->save();
		return redirect()->route('pesanan');
	}
	public function upload($id)
	{
		return view('pelangganUploadBukti',[
			'id'=>$id,
			'active' => 'pesanan',
			'title' => 'Upload',
			'keterangan' => 'bukti pembayaran'
		]);
	}

	public function simpanB(Request $request, $id)
	{
		$request->validate([
			'bukti'=>'required|mimes:png,jpeg|file|max:10000'
		]);
		$buktiPembayaran = url('storage/'.str_replace('public/', '', $request->file('bukti')->store('public/pembayaran')));
		Pesanan::find($id)->update([
			'bukti_pembayaran'=>$buktiPembayaran,
			
		]);
		return redirect()->route('pesanan');
	}

	public function batal($id)
	{
		$pesanan = Pesanan::find($id);
		$pesanan->delete();
		return redirect()->route('pesanan');
	}
}
