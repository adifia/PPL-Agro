@extends('layouts.app')

@section('content')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Stok</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Tambah Data Stok

                    {{-- form profile --}}
                    <form method="post" action="{{ route('simpan-stok') }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" aria-describedby="emailHelp" placeholder="Ukuran">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga /kg</label>
                            <input type="number" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" placeholder="Harga">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (kg)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Jumlah">
                        </div>
                       
                        <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
