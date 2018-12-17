@extends('layouts.admin.mainAdmin')

@section('tableA')
{{-- <a class="button" href="{{ route('home-pelanggan') }}">Akun</a> --}}

<div class="clear"></div>
<div class="main-menu-area mg-tb-40">

   <div class="container-fluid" style="margin-top: -20px;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" style="height: auto;">
          <div class="item active">
            <img src="{{ asset('template/img/logo/Banner1.png') }}" alt="bg1">
        </div>

        <div class="item">
          <img src="{{ asset('template/img/logo/Banner3.png') }}" alt="bg2">
      </div>

      <div class="item">
          <img src="{{ asset('template/img/logo/Banner2.png') }}" alt="bg3">
      </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div id="ketiga">
    <div class="konten">

    </div>
</div>
</div>
</div>

<div class="sale-statistic-area">
    <div class="container">
        <div class="col-xs-12" style="text-align: center;">
            <div id="kedua">
                <h4><img src=" " style="margin-right: 20px; padding-left: 2px;">Pemilik usaha Slamet Riyadi</h4>
                <div class="box_sd"><p style="text-align: center; margin-left: 50px;">Usaha ini merupakan usaha penjualan ikan lele Rambigundam yang ada di rambipuji jember. Dan sistem ini adalah untuk meningkatkan penjualan ikan lele dan meningkatkan efektivitas karyawan. Juga berdampak pada peningkatan penjualan dan efisiensi waktu dalam pemesanan ikan. Memudahkan pelanggan dalam melihat jumlah stok ikan yang ada. Sehingga menghindari kemungkinan kelebihan pesanan yang dapat mengurangi kadar kepercayaan pelanggan terhadap Penjual.</p></div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="text-align: center; margin-top: 20px;">

    <h2 style="margin-bottom: 20px;">Informasi lebih lanjut silahkan hubungi kami</h2>

    <div class="col-xs-4">
      <h4><img src="{{ asset('template/img/logo/contact_1.png') }}" style="margin-right: 20px; padding-left: 20px;">Telepon</h4>
      <div class="box_sd"><p style="text-align: left; margin-left: 50px;"></p>089766543221</div>
  </div>
  <div class="col-xs-4">
      <h4><img src="{{ asset('template/img/logo/contact_2.png') }}" style="margin-right: 20px; padding-left: 20px;">E-mail</h4>
      <div class="box_sd"><a href=""><p style="text-align: center; margin-left: 50px;">sepik@gmail.com</p></a></div>
  </div>
  <div class="col-xs-4">
      <h4><img src="{{ asset('template/img/logo/contact_1.png') }}" style="margin-right: 20px; padding-left: 20px;">Facebook</h4>
      <div class="box_sd"><a href=""><p style="text-align: center; margin-left: 50px;">sepik21@facebook.com</p></a></div>
  </div>
</div>
@endsection
