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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembelian');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_distributor');
            $table->integer('jumlah');
            $table->string('qty');
            $table->integer('harga');
            $table->integer('total_harga');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('id_distributor')->references('id')->on('distributors')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
