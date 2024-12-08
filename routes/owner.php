<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'owner'])->group(function () {

    // Fitur-fitur lain yang hanya boleh diakses oleh Owner


});
