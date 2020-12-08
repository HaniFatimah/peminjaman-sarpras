<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBarangSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_barang_siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nama_peminjam');
            $table->string('nipd')->nullable();
            $table->integer('barang_id');
            $table->integer('mapel_id');
            $table->integer('guru_id');
            $table->integer('kelas_id');
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
        Schema::dropIfExists('peminjaman_barang_siswas');
    }
}
