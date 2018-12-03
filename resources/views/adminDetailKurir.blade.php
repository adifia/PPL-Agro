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
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$user->nama}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="-" value="{{$user->jenisKelamin}}" readonly="readonly">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="-" value="{{$user->alamat}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="-" value="{{$user->noHp}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <input type="text" class="form-control" id="role" name="role" aria-describedby="emailHelp" placeholder="role" value="{{$user->role}}" readonly="readonly">
                        </div>
                        <a class="btn btn-primary" href="{{ route('edit-kurir', $user->id) }}" style=" color: white;">Ubah</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
