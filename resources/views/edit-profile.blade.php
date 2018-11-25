@extends('layouts.app')

@section('content')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Akun</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Kamu adalah pelanggan

                    {{-- form profile --}}
                    <form action="{{ route('simpan-profile') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{Auth::user()->nama}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{Auth::user()->email}}" readonly="readonly">
                        </div>
                        <label>Jenis kelamin</label><br>
                        <input  @if(Auth::user()->jenisKelamin=='laki-laki') checked="checked" @endif type="radio" name="jeniskelamin" id="lk" value="laki-laki">Laki-Laki
                        <input @if(Auth::user()->jenisKelamin=='perempuan') checked="checked" @endif type="radio" name="jeniskelamin" id="pr" value="perempuan">Perempuan
                        <br><br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->noHp}}">
                        </div>
                        <input type="hidden" name="_method" value="post">
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>
                        {{ csrf_field() }}
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
