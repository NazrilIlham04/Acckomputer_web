<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jenisController extends Controller
{
    //
    public function listJenis(){
        return view('jenis');
    }
}
