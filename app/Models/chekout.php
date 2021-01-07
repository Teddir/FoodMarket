<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chekout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jumlah_pesanan',
        'quantity',
        'subtotal',
        'status',
        'user_id',
    ];
}
