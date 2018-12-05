@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('coba') }}" class="list-group-item list-group-item-action">
                    Data Pelanggan
                </a>
                <a href="{{ route('data-kurir') }}" class="list-group-item list-group-item-action">
                    Data Kurir
                </a>
                <a href="{{ route('data-stok') }}" class="list-group-item list-group-item-action">Stok</a>
                <a href="{{ route('data-pesanan') }}" class="list-group-item list-group-item-action">Pesanan</a>

            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Selamat Datang Admin !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
