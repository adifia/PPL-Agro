<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/masuk', 'AutentikasiController@index')->name('masuk');
Route::get('/home-pelanggan', 'HomePelangganController@index')->name('home-pelanggan');
Route::post('/masuk', 'AutentikasiController@store')->name('post-akun');
Route::get('/home-kurir', 'HomePelangganController@kurir')->name('home-kurir');


Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/edit-profile', 'ProfilController@edit')->name('edit-profile');
Route::post('/simpan-profile', 'ProfilController@save')->name('simpan-profile');

Route::get('/data-pelanggan', 'Admin\PelangganController@index')->name('data-pelanggan');
Route::get('/detail-data/{id}', 'Admin\PelangganController@detail')->name('detail-data');
Route::get('/edit-data/{id}', 'Admin\PelangganController@edit')->name('edit-data');
Route::post('/simpan-data/{id}', 'Admin\PelangganController@simpan')->name('simpan-data');

Route::get('/coba', 'Admin\PelangganController@coba')->name('coba');

Route::get('/stok', 'Admin\StokController@index')->name('data-stok');
Route::get('/tambah-stok', 'Admin\StokController@tambah')->name('tambah-stok');
Route::post('/simpan-stok', 'Admin\StokController@simpan')->name('simpan-stok');
ROute::get('/edit-stok/{id}', 'Admin\StokController@edit')->name('edit-stok');
Route::post('/update-stok/{id}', 'Admin\StokController@update')->name('update-stok');

//pesanan admin
Route::get('/data-pesanan', 'Admin\PesananController@index')->name('data-pesanan');
Route::get('/verif-pesanan/{id}', 'Admin\PesananController@verif1')->name('verif1');
Route::get('/verif-pembayaran/{id}', 'Admin\PesananController@verif2')->name('verif2');
Route::get('/tolak-pesanan/{id}', 'Admin\PesananController@tolak')->name('tolak');
Route::get('/alasan-pembatalan/{id}', 'Admin\PesananController@alasan')->name('alasan');
Route::get('/batal-pesanan/{id}', 'Admin\PesananController@batal')->name('batal');

//pesanan kurir
Route::get('/pesanan-diterima/{id}', 'Admin\PesananController@diterima')->name('diterima');

//pesanan user
Route::get('/pesanan', 'PesananController@index')->name('pesanan');
Route::get('/buat-pesanan', 'PesananController@buat')->name('buat-pesanan');
Route::post('/simpan-pesanan', 'PesananController@simpan')->name('simpan-pesanan');
Route::get('/upload-bukti/{id}', 'PesananController@upload')->name('upload-bukti');
Route::post('/simpan-bukti/{id}', 'PesananController@simpanB')->name('simpan-bukti');
