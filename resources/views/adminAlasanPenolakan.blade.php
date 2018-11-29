@extends('layouts.app')

@section('menu')
<li class="nav-item">
    <a class="nav-link" href="{{route('profil')}}">Profil</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
</li>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Masukkan alasan penolakan</div>

                <div class="card-body">
                    <form method="put" action="{{ route('tolak',[$id]) }}">

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif


                        <div class="form-group">
                            <textarea class="form-control" id="alasan" name="alasan" rows="5" cols="95">
                            </textarea>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>
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
