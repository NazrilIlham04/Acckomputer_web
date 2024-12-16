<?php

namespace App\Livewire;

use App\Models\jenis_produk;
use Livewire\Component;

class DaftarJenis extends Component
{
    public $jenis;

    public $jenisProduk;

    protected $rules = [
        'jenisProduk' => 'required|string|min:3|max:255',
    ];

    public function mount(){
        $jenis = jenis_produk::all();

        $this->jenis = $jenis;

    }

    public function submit()
    {
        $this->validate();

        jenis_produk::create([
            'jenis_produk' => $this->jenisProduk,
        ]);

        $this->resetForm();

        session()->flash('success', 'Jenis produk berhasil disimpan.');

        return redirect('/produks/jenis');
    }

    public function resetForm()
    {
        $this->reset('jenisProduk');
    }


    public function render()
    {
        return view('livewire.daftar-jenis');
    }
}
