<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produksController extends Controller
{
    //

    public function listProduk(){
        return view('produks');
    }

    public function tambahProduks(){
        return view('tambahProduks');
    }

    public function editProduks($id){
        return view('editProduks',compact('id'));
    }
}
