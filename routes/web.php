<?php

use App\Http\Controllers\LoginControllers;
use App\Livewire\LoginForm;
use Illuminate\Support\Facades\Route;



Route::get('/login',LoginForm::class)->name('login');


require base_path('routes/teknisi.php');
require base_path('routes/owner.php');
require base_path('routes/test.php');



















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




