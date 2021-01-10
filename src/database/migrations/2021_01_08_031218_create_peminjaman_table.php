<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('kode_peminjaman');
            $table->string('lokasi');
            $table->string('status');
            $table->uuid('asset_id');
            $table->uuid('user_id');
            $table->datetime('tanggal_pinjam');
            $table->datetime('tanggal_kembali');
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('asset');
            $table->foreign('user_id')->references('id')->on('users');
            // ['kode_peminjaman','lokasi','status','asset_id','user_id','tanggal_pinjam','tanggal_kembali']
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
