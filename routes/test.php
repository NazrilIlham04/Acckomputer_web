<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('test.welcome');
});

Route::get('/profileowner', function () {
    return view('test.profileowner');
});

Route::get('/pesanan', function () {
    return view('test.pesanan');
});

// Route::get('/daftarproduk', function () {
//     return view('test.daftarproduk');
// });

//  Route::get('/produk', function () {
//     return view('test.produk');
// });

Route::get('/transaksi', function () {
    return view('test.transaksi');
});

// Route::get('/dashboard', function () {
//     return view('test.dashboard');
// });

Route::get('/pesanan1', function () {
    return view('test.pesanan1');
});

Route::get('/datapesanan', function () {
    return view('test.datapesanan');
});

Route::get('/daftarlayanan', function () {
    return view('test.daftarlayanan');
});

Route::get('/editproduk', function () {
    return view('test.editproduk');
});

Route::get('/editlayanan', function () {
    return view('test.editlayanan');
});

Route::get('/pemesanan', function () {
    return view('test.pemesanan');
});

Route::get('/editpengguna', function () {
    return view('test.editpengguna');
});

Route::get('/profilepengguna', function () {
    return view('test.profilepengguna');
});

Route::get('/daftarpengguna', function () {
    return view('test.daftarpengguna');
});

Route::get('/profileteknisi', function () {
    return view('test.profileteknisi');
});

Route::get('/gantipass', function () {
    return view('test.gantipass');
});

Route::get('/datapelanggan', function () {
    return view('test.datapelanggan');
});

Route::get('/tambahproduk', function () {
    return view('test.tambahproduk');
});

Route::get('/jenisproduk', function () {
    return view('test.jenisproduk');
});

Route::get('/tambahdata', function () {
    return view('test.tambahdata');
});

Route::get('/tambahpengguna', function () {
    return view('test.tambahpengguna');
});
