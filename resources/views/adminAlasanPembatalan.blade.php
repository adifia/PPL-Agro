@extends('layouts.admin.mainAdmin')

@section('tableA')


<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <form method="put" action="{{ route('batal',[$id]) }}">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="form-group">
                        <textarea class="form-control" id="alasan" name="alasan" rows="5" cols="95" required="required">
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" value="save">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('data-pesanan') }}" style=" color: white;">Kembali</a>
                    {{ csrf_field() }}

                </form>
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
