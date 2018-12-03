@extends('layouts.app')

@section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{ route('profil') }}">Profil</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('stok-pelanggan') }}">Stok</a>
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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                   {{--  @foreach ($user as $u)
                        {{$u->nama}}
                        @endforeach --}}
                        Kamu adalah pelanggan
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
