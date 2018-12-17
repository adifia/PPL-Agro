@extends('layouts.admin.main')
@section('tableA')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-list">
            <div class="basic-tb-hd">
                <h2>Basic Example</h2>
                <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
            </div>
            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$u->nama}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->jenisKelamin}}</td>
                            <td>{{$u->alamat}}</td>
                            <td>{{$u->noHp}}</td>
                            <td>{{$u->role}}</td>
                            <td><button class="btn btn-primary"><a href="{{ route('detail-data', $u->id) }}" style=" color: white;">Detail</a></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection