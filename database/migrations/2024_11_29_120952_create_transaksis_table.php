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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_pelayan')->unsigned();
            $table->enum('metode_pembayaran',['debit','cash']);
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('id_pelayan')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
