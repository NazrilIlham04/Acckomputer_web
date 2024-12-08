<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class jenis_produk extends Model
{
    //
    protected $guarded = [];

    protected $table = 'jenis_produks';

    // Relasi: JenisProduk memiliki banyak produk
    public function produks(): HasMany
    {
        return $this->hasMany(Produk::class, 'jenis');
    }
}
