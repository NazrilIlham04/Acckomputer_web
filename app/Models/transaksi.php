<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class transaksi extends Model
{
    //
    protected $guarded = [];
    protected $table = 'transaksis';

    // Relasi: Transaksi dimiliki oleh Customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(customer::class, 'id_customer');
    }

    // Relasi: Transaksi dimiliki oleh User (kasir)
    public function kasir(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_kasir');
    }

    // Relasi: Transaksi memiliki banyak detail transaksi
    public function detailTransaksis(): HasMany
    {
        return $this->hasMany(detail_transaksi::class, 'id_transaksi');
    }
}
