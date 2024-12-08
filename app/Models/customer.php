<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class customer extends Model
{
    //
    protected $guarded = [];

    protected $table = 'customers';

    // Relasi: Customer memiliki banyak transaksi
    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'id_customer');
    }
}
