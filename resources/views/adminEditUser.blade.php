@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('data-pelanggan') }}" class="list-group-item list-group-item-action active">
                    Data Pelanggan
                </a>
                <a href="{{ route('data-stok') }}" class="list-group-item list-group-item-action">Stok</a>
                <a href="#" class="list-group-item list-group-item-action">Data Pesanan</a>

            </div>
        </div>
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
                    <form method="post" action="{{ route('simpan-data', $user->id)}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$user->nama}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin</label><br>
                            <input @if($user->jenisKelamin=='laki-laki') checked="checked" @endif type="radio" name="jeniskelamin" id="lk" value="laki-laki">Laki-Laki
                            <input @if($user->jenisKelamin=='perempuan') checked="checked" @endif type="radio" name="jeniskelamin" id="pr" value="perempuan">Perempuan
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="-" value="{{$user->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="-" value="{{$user->noHp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                             <select name="role" id="role" class="form-control">
                                   <option @if($user->role=='pelanggan') selected="selected" @endif value="pelanggan">Pelanggan</option>
                                   <option @if($user->role=='kurir') selected="selected" @endif value="kurir">Kurir</option>
                                   <option @if($user->role=='admin') selected="selected" @endif value="admin">Admin</option>
                               </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
