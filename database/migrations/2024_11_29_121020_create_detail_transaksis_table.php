<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_transaksi')->unsigned();
            $table->bigInteger('id_produk')->unsigned();
            $table->integer('kuantitas');
            $table->foreign('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
