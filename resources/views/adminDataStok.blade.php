@extends('layouts.admin.mainAdmin')

@section('tableA')


<div class="row">
        {{-- <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('data-pelanggan') }}" class="list-group-item list-group-item-action">
                    Data User
                </a>
                <a href="{{ route('data-stok') }}" class="list-group-item list-group-item-action active">Stok</a>
                <a href="{{ route('data-pesanan') }}" class="list-group-item list-group-item-action">Pesanan</a>

            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stok as $s)
                            <tr>
                                <th scope="row">{{$s->ukuran}}</th>
                                <td>{{$s->keterangan}}</td>
                                <td>{{$s->harga}}</td>
                                <td>{{$s->jumlah}}</td>
                                <td><a class="btn btn-success" href="{{ route('edit-stok', $s->id) }}" style=" color: white;">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if(count($stok) < 3)
                    <a class="btn btn-danger" href="{{ route('tambah-stok') }}" style=" color: white;">Tambah Stok</a><br><br><br>    
                    @endif
                    
                    {{-- <div style="float: right;">
                    {{$user->links()}}
                </div> --}}

            </div>
        </div>
    </div>
</div>

@endsection
