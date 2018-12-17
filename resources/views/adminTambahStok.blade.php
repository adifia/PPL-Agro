@extends('layouts.admin.mainAdmin')

@section('tableA')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Data Stok</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Tambah Data Stok --}}

                    {{-- form profile --}}
                    <form method="post" action="{{ route('simpan-stok') }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" aria-describedby="emailHelp" placeholder="Ukuran" required="required">
                        </div>

                        <div class="form-group">
                             <label for="exampleInputEmail1">Penjelasan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="5" cols="95" required="required">
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga /kg</label>
                            <input type="number" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" placeholder="Harga" required="required">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (kg)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Jumlah" required="required">
                        </div>
                       
                        <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                        <a class="btn btn-danger" href="{{ route('data-stok') }}" style=" color: white;">Kembali</a>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
