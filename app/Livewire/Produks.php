<?php

namespace App\Livewire;

use App\Models\produk;
use Livewire\Component;

class Produks extends Component
{

    public $produks;


    public function mount(){
        $produks =  produk::with('jenisProduk')->get();
        $this->produks = $produks;

    }



    public function render()
    {
        return view('livewire.produks');
    }


}
