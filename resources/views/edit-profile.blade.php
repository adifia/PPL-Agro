@extends('layouts.main')

@section('table')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Akun</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Kamu adalah pelanggan --}}

                    {{-- form profile --}}
                    <form action="{{ route('simpan-profile') }}" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{Auth::user()->nama}}" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{Auth::user()->email}}" readonly="readonly">
                        </div>
                        <label>Jenis kelamin</label><br>
                        <input  @if(Auth::user()->jenisKelamin=='laki-laki') checked="checked" @endif type="radio" name="jeniskelamin" id="lk" value="laki-laki">Laki-Laki
                        <input @if(Auth::user()->jenisKelamin=='perempuan') checked="checked" @endif type="radio" name="jeniskelamin" id="pr" value="perempuan">Perempuan
                        <br><br>

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
                            <label for="exampleInputEmail1">Alamat (Desa dan alamat lengkap)</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="" value="" required="required">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="number" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" placeholder="" value="{{Auth::user()->noHp}}" required="required">
                        </div>
                        <input type="hidden" name="_method" value="post">
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>
                        <a class="btn btn-danger" href="{{ route('profil') }}">Batal</a>
                        {{ csrf_field() }}
                    </form>
    
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
