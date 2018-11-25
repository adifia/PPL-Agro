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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pesananmu</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Buat Pesanan


                    {{-- form profile --}}
                    <form method="post" action="{{ route('simpan-pesanan') }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ukuran</label>
                            <select name="ukuran" id="ukuran" class="form-control">
                                   @foreach ($stok as $st)
                                       <option value="{{$st->ukuran}}">{{$st->ukuran}}</option>
                                   @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (kg)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Jumlah">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Pengiriman</label><br>
                            <textarea class="form-control" id="alamat" name="alamat" rows="5" cols="95">{{Auth::user()->alamat}}</textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
