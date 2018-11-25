@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('data-pelanggan') }}" class="list-group-item list-group-item-action">
                    Data User
                </a>
                <a href="{{ route('data-stok') }}" class="list-group-item list-group-item-action">Stok</a>
                <a href="{{ route('data-pesanan') }}" class="list-group-item list-group-item-action active">Pesanan</a>

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Data Pesanan</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Jumlah Pesanan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $pes)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$pes->created_at}}</td>
                                    <td>{{$pes->user->nama}}</td>
                                    <td>{{$pes->ukuran}}</td>
                                    <td>{{$pes->jumlah_pesanan}}</td>
                                    <td>{{$pes->alamat}}</td>
                                    <td>Rp.{{$pes->harga}}</td>
                                    <td>@if ($pes->status == 'Menunggu verifikasi')
                                        <span class="badge badge-info">{{$pes->status}}</span>
                                        @elseif ($pes->status == 'Diverifikasi')
                                        <span class="badge badge-primary">{{$pes->status}}</span>
                                        @elseif ($pes->status == 'Dalam pengiriman')
                                        <span class="badge badge-warning">{{$pes->status}}</span>
                                        @elseif ($pes->status == 'Diterima')
                                        <span class="badge badge-success">{{$pes->status}}</span>
                                        @elseif ($pes->status == 'Dibatalkan')
                                        <span class="badge badge-dark">{{$pes->status}}</span>
                                        <p>{{$pes->alasan}}</p>
                                        @elseif ($pes->status == 'Ditolak')
                                        <span class="badge badge-danger">{{$pes->status}}</span>
                                        <p>{{$pes->alasan}}</p>
                                        @endif
                                        </td>
                                    <td>
                                        @if ($pes->bukti_pembayaran)
                                        <a href="{{$pes->bukti_pembayaran}}" target="_blank">Lihat</a> 
                                        @else
                                        <span class="badge badge-danger">Belum</span>
                                        @endif
                                    </td>
                                    <td>@if($pes->status == 'Menunggu verifikasi')
                                        <a class="btn btn-success" href="{{ route('verif1', $pes->id) }}">Verifikasi Pesanan</a><br>
                                        <a class="btn btn-danger" href="{{ route('tolak', $pes->id) }}">Tolak Pesanan</a>
                                        @elseif($pes->status == 'Diverifikasi' && !empty($pes->bukti_pembayaran))
                                        <a class="btn btn-success" href="{{ route('verif2', $pes->id) }}">Verifikasi Pembayaran</a>
                                        <a class="btn btn-dark" href="{{ route('alasan', $pes->id) }}">Batalkan</a>
                                        @elseif($pes->status == 'Dalam pengiriman')
                                        <a class="btn btn-dark" href="{{ route('alasan', $pes->id) }}">Batalkan</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
