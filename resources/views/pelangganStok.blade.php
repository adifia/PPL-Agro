@extends('layouts.main')

{{-- @section('menu')
<li class="nav-item">
	<a class="nav-link" href="{{route('profil')}}">Profil</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('stok-pelanggan') }}">Stok</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
</li>
@endsection --}}

@section('table')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				{{-- <div class="card-header">Stok Ikan Lele</div> --}}

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<div class="container">
						<div class="row">
							@foreach ($stok as $s)
							<div class="col-md-4">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="{{$s->gambar}}" style="max-height: 150px" alt="lele_{{$s->ukuran}}">
									<div class="card-body">
										<h4 class="card-title">Lele {{$s->ukuran}}</h4>
										<h6 class="card-title">Tersedia : {{$s->jumlah}} kg</h6>
										<p class="card-text">{{$s->keterangan}}</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<center><a href="{{ route('buat-pesanan') }}" style="margin-top: 15px" class="btn btn-success">Buat Pesanan</a></center>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection


