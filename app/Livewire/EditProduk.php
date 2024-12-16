<?php

namespace App\Livewire;

use App\Models\jenis_produk;
use App\Models\produk;
use Livewire\Component;

class EditProduk extends Component
{

    public $produk_id;
    public $nama_produk;
    public $jenis;
    public $harga;
    public $jenis_produk;

    public function mount($id)
    {
        $produk = produk::findOrFail($id);

        $this->produk_id = $produk->id;
        $this->nama_produk = $produk->nama_produk;
        $this->jenis = $produk->jenis;
        $this->harga = $produk->harga;

        $this->jenis_produk = jenis_produk::all();
    }

    public function update()
    {
        $this->validate([
            'nama_produk' => 'required|string|max:255',
            'jenis' => 'required|exists:jenis_produks,id',
            'harga' => 'required|numeric|min:0',
        ]);

        $produk = Produk::findOrFail($this->produk_id);
        $produk->update([
            'nama_produk' => $this->nama_produk,
            'jenis' => $this->jenis,
            'harga' => $this->harga,
        ]);

        session()->flash('success', 'Produk berhasil diperbarui!');
    }
}
