<?php

namespace App\Livewire;

use App\Models\jenis_produk;
use App\Models\produk;
use Livewire\Component;

class TambahProduk extends Component
{
    public $jenis_produk;
    public $nama_produk;
    public $jenis;
    public $harga;

    public function mount()
    {
        $this->jenis_produk = jenis_produk  ::all(); // Ambil semua jenis produk
    }

    public function save()
    {
       // dd([$this->nama_produk,$this->jenis,$this->harga]);
        $this->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);



        produk::create([
            'nama_produk' => $this->nama_produk,
            'jenis' => $this->jenis,
            'harga' => $this->harga,
        ]);

        session()->flash('success', 'Produk berhasil ditambahkan!');
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->nama_produk = '';
        $this->jenis = '';
        $this->harga = '';
    }

    public function render()
    {
        return view('livewire.tambah-produk');
    }
}
