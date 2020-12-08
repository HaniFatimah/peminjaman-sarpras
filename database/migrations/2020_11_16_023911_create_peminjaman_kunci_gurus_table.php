<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanKunciGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_kunci_gurus', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nama_peminjam');
            $table->string('nik')->nullable();
            $table->string('jabatan_id');
            $table->integer('kunci_id');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali');
            $table->string('status');
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
        Schema::dropIfExists('peminjaman_kunci_gurus');
    }
}
