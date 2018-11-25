<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pesanan', function (Blueprint $table){
            $table->increments('id');
            $table->string('ukuran', 50);
            $table->integer('jumlah_pesanan')->unsigned();
            $table->string('alamat', 191);
            $table->string('bukti_pembayaran', 191);
            $table->string('status_diterima', 50);
            $table->string('status_pembayaran', 50);
            $table->string('status_terkirim', 50);
            $table->double('harga');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_stok')->unsigned();
            $table->foreign('id_stok')->references('id')->on('stok')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_pesanan')->unsigned();
            $table->foreign('id_pesanan')->references('id')->on('pesanan')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
}
