@extends('layouts.main')

@section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{route('profil')}}">Profil</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
</li>
@endsection

@section('table')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               {{--  <div class="card-header">Akun</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Kamu adalah pelanggan --}}

                    {{-- form profile --}}
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{Auth::user()->nama}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{Auth::user()->email}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="-" value="{{Auth::user()->jenisKelamin}}" readonly="readonly">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="-" value="{{Auth::user()->alamat}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="-" value="{{Auth::user()->noHp}}" readonly="readonly">
                        </div>
                        <a class="btn btn-primary" href="{{ route('edit-profile') }}">Ubah</a>
                    </form>
                    



                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @push('script')
    <script>
        $(document).ready(function(){
            
        })
        function idupin(){
            $('#alamat').attr('readonly', false)
            $('#nohp').attr('readonly', false)
        }
    </script>
    @endpush --}}
