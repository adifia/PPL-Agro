<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',25);
            $table->string('email',191)->unique();
            $table->string('password',191);
            $table->rememberToken();
            $table->enum('role',['admin','pelanggan','kurir','pemilik']);
            $table->enum('jenisKelamin',['laki-laki', 'perempuan'])->nullable();
            $table->string('alamat',191)->nullable();
            $table->string('noHp',50)->nullable();
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
        Schema::dropIfExists('users');
    }
}
