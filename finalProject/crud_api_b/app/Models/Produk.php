<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'nama',
        'kategori_id',
        'stok',
        'harga',
    ];

    protected function serializeDate(\DateTimeInterface $date)
    {
        return Carbon::parse($date)
            ->timezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
