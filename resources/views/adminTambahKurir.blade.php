@extends('layouts.app')

@section('content')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data kurir</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Tambah Data Kurir

                    <form method="post" action="{{ route('simpan-kurir')}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin</label><br>
                            <input type="radio" name="jeniskelamin" id="lk" required="required" value="laki-laki">Laki-Laki
                            <input type="radio" name="jeniskelamin" id="pr" required="required" value="perempuan">Perempuan
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Kabupaten</label>
                                <select name="kabupaten" id="kabupaten" class="form-control" onchange="panggil_kecamatan(event,this)" required="required">
                                <option value=""></option>
                                 @foreach ($kabupaten as $kab)
                                 <option value="{{$kab->id}}">{{$kab->kabupaten}}</option>
                                 @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Kecamatan</label>
                                <select name="kecamatan" id="kecamatan" class="form-control" required="required">
                                </select>
                            </div>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="-" required="required">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="-" required="required">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>
                        <a href="{{ route('batalkan-kurir') }}" class="btn btn-danger">Batal</a>
                        {{ csrf_field() }}
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('script')
    <script>
        function panggil_kecamatan(e, element){
            $.ajax({
                url:'{{url('/get-kecamatan')}}/'+$(element).val(),
                success: function(respons){
                    var html = '';
                    for(var i of respons){
                        html+='<option value="'+i.id+'">'+i.kecamatan+'</option>' 
                    }
                    $('#kecamatan').html(html);
                }
            })
        }
    </script>
@endpush