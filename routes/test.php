<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('test.welcome');
});


Route::get('/pesanan', function () {
    return view('test.pesanan');
});

Route::get('/layanan', function () {
    return view('test.layanan');
});
