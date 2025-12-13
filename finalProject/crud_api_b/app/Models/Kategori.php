<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    protected function serializeDate(\DateTimeInterface $date)
    {
        return Carbon::parse($date)
            ->timezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
    }

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}
