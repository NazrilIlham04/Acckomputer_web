<?php

use App\Http\Controllers\jenisController;
use App\Http\Controllers\produksController;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'owner'])->group(function () {

    // Fitur-fitur lain yang hanya boleh diakses oleh Owner

    Route::get('/produks',[produksController::class,'listProduk'])->name('Produks');
    Route::get('/produks/tambah',[produksController::class,'tambahProduks'])->name('tambahProduks');
    Route::get('/produks/edit/{id}',[produksController::class,'editProduks'])->name('editProduks');

    Route::get('/produks/jenis',[jenisController::class,'listJenis'])->name('jenisProduks');
});
