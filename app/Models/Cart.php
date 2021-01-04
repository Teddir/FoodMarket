<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_makananMinuman',
        'quantity',
        'harga',
        'total',
        'subtotal',
        'image',
    ];
}
