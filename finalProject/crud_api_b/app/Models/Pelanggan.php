<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
    ];

    protected function serializeDate(\DateTimeInterface $date)
    {
        return Carbon::parse($date)
            ->timezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
    }
}
