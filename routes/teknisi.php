<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'teknisi'])->group(function () {

    Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('Dashboard');

});

