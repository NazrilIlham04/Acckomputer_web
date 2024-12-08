<?php

use App\Http\Controllers\LoginControllers;
use App\Livewire\LoginForm;
use Illuminate\Support\Facades\Route;


Route::get('/login',LoginForm::class)->name('login');


// Route untuk Owner
Route::middleware(['auth', 'owner'])->group(function () {

    // Fitur-fitur lain yang hanya boleh diakses oleh Owner


});


// Route untuk Teknisi (Teknisi bisa akses semua fitur yang dimiliki Owner, kecuali yang khusus Owner)
Route::middleware(['auth', 'teknisi'])->group(function () {

    // Fitur-fitur yang bisa diakses oleh Teknisi



});
















// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/pesanan', function () {
//     return view('pesanan');
// });

// Route::get('/layanan', function () {
//     return view('layanan');
// });




