@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit Data Pelanggan</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- form edit user --}}
                    <form method="post" action="{{ route('verif1', $pesanan->id) }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ukuran</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$pesanan->ukuran}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah pesanan (kg)</label>
                            <input type="number" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{$pesanan->jumlah_pesanan}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="-" value="{{$pesanan->alamat}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total harga</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="-" value="{{$pesanan->harga}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tambahkan ongkos kirim</label>
                            <input type="number" class="form-control" id="ongkos" name="ongkos" aria-describedby="emailHelp" placeholder="-" required="required">
                        </div>
                        
                        <button class="btn btn-primary" type="submit" value="save">Verifikasi</button>
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
