@extends('layouts.admin.mainPK')

@section('tableA')
<div class="container">

    <div class="row">
        {{-- <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('data-pelanggan') }}" class="list-group-item list-group-item-action">
                    Data User
                </a>
                <a href="{{ route('data-stok') }}" class="list-group-item list-group-item-action">Stok</a>
                <a href="{{ route('data-pesanan') }}" class="list-group-item list-group-item-action active">Pesanan</a>

            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">Berikut pesanan yang harus dikirim</div> --}}
                    

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
                                    <th scope="col">Nomer HP</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Jumlah Pesanan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Tanggal maksimal dikirim</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $pes)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$pes->updated_at}}</td>
                                    <td>{{$pes->user->nama}}</td>
                                    <td>{{$pes->user->noHp}}</td>
                                    <td>{{$pes->ukuran}}</td>
                                    <td>{{$pes->jumlah_pesanan}}</td>
                                    <td>{{$pes->alamat}}</td>
                                    <td>Rp.{{$pes->harga}}</td>
                                    <td>{{date('Y-m-d', strtotime($pes->updated_at. '+3 days'))}}</td>
    
                                    <td>@if($pes->status == 'Dalam pengiriman' && strtotime(date('Y-m-d')) < strtotime(date('Y-m-d', strtotime($pes->updated_at. '+3 days'))))
                                        <a class="btn btn-success" href="{{ route('diterima', $pes->id) }}" style="">Diterima</a>
                                        @elseif($pes->status == 'Diterima')
                                        status {{$pes->status}}
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

{{-- @include('layouts.footer') --}}
@include('layouts.js')