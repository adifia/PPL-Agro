@extends('layouts.app')

@section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{route('profil')}}">Profil</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
</li>
@endsection

@section('content')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pesananmu</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (count($pesanan) == 0)                    
                    Belum ada pesanan yang kamu buat !<br>
                    @endif 

                    
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Jumlah Pesanan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status</th>
                                {{-- <th scope="col">Aksi</th> --}}
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $pes)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$pes->ukuran}}</td>
                                <td>{{$pes->jumlah_pesanan}}</td>
                                <td>{{$pes->alamat}}</td>
                                <td>Rp. {{$pes->harga}}</td>
                                <td>@if ($pes->status == 'Menunggu verifikasi')
                                    <span class="badge badge-secondary">{{$pes->status}}</span>
                                    @elseif ($pes->status == 'Diverifikasi')
                                    <span class="badge badge-primary">{{$pes->status}}</span>
                                    @elseif ($pes->status == 'Dalam pengiriman')
                                    <span class="badge badge-warning">{{$pes->status}}</span>
                                    @elseif ($pes->status == 'Diterima')
                                    <span class="badge badge-success">{{$pes->status}}</span>
                                    @elseif ($pes->status == 'Dibatalkan')
                                    <span class="badge badge-dark">{{$pes->status}}</span>
                                    <p>{{$pes->alasan}}</p>
                                    @else
                                    <span class="badge badge-danger">{{$pes->status}}</span>
                                    @endif
                                </td>

                                <td>
                                    @if($pes->status == 'Diverifikasi' && is_null($pes->bukti_pembayaran))
                                    <a class="btn btn-success" href="{{ route('upload-bukti', $pes->id) }}" style=" color: white;">Upload</a> 
                                    @elseif($pes->bukti_pembayaran)
                                    <a class="btn btn-primary" href="{{$pes->bukti_pembayaran}}" target="_blank">Lihat</a> 
                                    @endif
                                </td>

                                <td>
                                    <a class="btn btn-warning" onclick="hapus(event, '{{ route('batalkan-pesanan', $pes->id) }}')">Batal</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a class="btn btn-danger" href="{{ route('buat-pesanan') }}" style=" color: white;">Buat Pesanan</a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script>
        function hapus(e, url){
            if (confirm('Apakah anda yakin ?')) {
                window.location=url
            }              
            
        }
    </script>
    @endpush
