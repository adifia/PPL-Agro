@extends('layouts.app')

@section('content')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Stok</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Edit Data Stok

                    {{-- form profile --}}
                    <form method="post" action="{{ route('update-stok', $stok->id) }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" aria-describedby="emailHelp" placeholder="ukuran" value="{{$stok->ukuran}}" required="required">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="5" cols="95" required="required">{{$stok->keterangan}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga /kg</label>
                            <input type="number" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" placeholder="Harga" value="{{$stok->harga}}" required="required">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (kg)</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$stok->jumlah}}" readonly="readonly" required="required">
                            
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal">Tambah</a>
                            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#kurangModal">Kurangi</a>

                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="save">Simpan</button>

                        <a href="{{ route('batalkan-stok') }}" class="btn btn-danger">Batal</a>


                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="tambahModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masukkan jumlah yang ingin ditambahkan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Dalam kg</label>
        <input type="number" class="form-control" id="tambahi" name="tambah" aria-describedby="emailHelp" placeholder="kg">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="tambahi(event)">OK</button>
    <button type="button" id="batalTambah" class="btn btn-secondary" data-dismiss="modal">Batal</button>
</div>
</div>
</div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="kurangModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masukkan jumlah yang ingin dikurangi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Dalam kg</label>
        <input type="number" class="form-control" id="kurangi" name="kurangi" aria-describedby="emailHelp" placeholder="kg">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="kurangi(event)">OK</button>
    <button type="button" id="batalKurangi" class="btn btn-secondary" data-dismiss="modal">Batal</button>
</div>
</div>
</div>
</div>
</div>
@endsection

@push('script')
<script>
 function kurangi(e){
    e.preventDefault();
    var kurangiStok = Number($('#kurangi').val());
    var jumlah = Number($('#jumlah').val());
    var hasil = jumlah-kurangiStok;
    if (hasil < 0)
    {
        alert('pengurangan melebihi stok');
    }
    else
    {
        $('#jumlah').val(hasil);
        $('#batalKurangi').trigger('click');
        $('.modal-backdrop').remove();
    }
}

function tambahi(e){
    e.preventDefault();
    var tambahStok = Number($('#tambahi').val());
    var jumlah = Number($('#jumlah').val());
    var hasil = jumlah+tambahStok;
    $('#jumlah').val(hasil);
    $('#batalTambah').trigger('click');
    $('.modal-backdrop').remove();   
}
</script>
@endpush