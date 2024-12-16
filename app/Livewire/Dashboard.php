<?php

namespace App\Livewire;

use App\Models\produk;
use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB ;
use Livewire\Component;

class Dashboard extends Component
{
    public $profile;
    public $produkTerpopuler;
    public $jumlahTransaksi;
    public $pembayaranTerpopuler;
    public $totalHariIni;


    public function mount(){

        $profile = Auth::user();
        $this->profile = $profile;

        $Transaksi =  transaksi::whereDate('created_at', Carbon::today())->get();
        $this->jumlahTransaksi = $Transaksi;

        $produkTerpopuler = Produk::withCount('detailTransaksis')
        ->orderBy('detail_transaksis_count', 'desc')
        ->first();

        $this->produkTerpopuler = $produkTerpopuler->nama_produk;

        $pembayaranTerpopuler = Transaksi::select('metode_pembayaran')
        ->selectRaw('COUNT(*) as total')
        ->groupBy('metode_pembayaran')
        ->orderBy('total', 'desc')
        ->first();

        $this->pembayaranTerpopuler = $pembayaranTerpopuler;

        $totalHariIni = Transaksi::whereDate('created_at', Carbon::today())
        ->sum('total_harga');

        $this->totalHariIni = $totalHariIni;


    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
