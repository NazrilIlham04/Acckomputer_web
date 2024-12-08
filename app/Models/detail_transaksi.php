<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detail_transaksi extends Model
{
    //
    protected $guarded = [];

    protected $table = 'detail_transaksis';

    // Relasi: DetailTransaksi dimiliki oleh Transaksi
    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(transaksi::class, 'id_transaksi');
    }

    // Relasi: DetailTransaksi dimiliki oleh Produk
    public function produk(): BelongsTo
    {
        return $this->belongsTo(produk::class, 'id_produk');
    }
}
