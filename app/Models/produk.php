<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class produk extends Model
{
    //
    protected $guarded = [];
    protected $table = 'produks';

    // Relasi: Produk dimiliki oleh JenisProduk
    public function jenisProduk(): BelongsTo
    {
        return $this->belongsTo(jenis_produk::class, 'jenis');
    }

    // Relasi: Produk memiliki banyak detail transaksi
    public function detailTransaksis(): HasMany

    {
        return $this->hasMany(detail_transaksi::class, 'id_produk');
    }
}
