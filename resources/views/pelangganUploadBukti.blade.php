@extends('layouts.main')

{{-- @section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{route('profil')}}">Profil</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
</li>
@endsection --}}

@section('table')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                {{-- <div class="card-header">Upload Bukti Pembayaran</div> --}}

                <div class="card-body">
                    <form action="{{ route('simpan-bukti',[$id]) }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}

                    {{-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif --}}

                    
                    <h2>Silahkan unggah bukti pembayaran ke no.rek</h2>
                    <h1>029929293929929 (BRI) a/n Riyadi Adi</h1>

                    <input type="file" accept="image/*" id="bukti" name="bukti"><br>
                        {{ $errors->first('bukti') }}
                    <br>

                    <br>
                    <button type="submit" class="btn btn-danger" href="" style=" color: white;">Unggah</button>
                        {{ csrf_field() }}
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
