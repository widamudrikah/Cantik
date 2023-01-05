<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('custemor_id');
            $table->integer('treatment_id');
            $table->string('nama');
            $table->integer('umur');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('keluhan');
            $table->string('tanggal_reservasi');
            $table->string('kode_transaksi');
            $table->integer('status')->default(1);
            $table->timestamps();

            /**
             * 1 = belum ditangani
             * 2 = sudah ditangani
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
