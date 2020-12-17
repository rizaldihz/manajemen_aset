<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('kode_aset');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('status');
            $table->integer('stok')->unsigned();
            $table->uuid('jenis_asset_id');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('jenis_asset_id')->references('id')->on('jenis_asset');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
