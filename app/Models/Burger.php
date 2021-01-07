<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Burger extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'jenis_burger',
        'stock',
        'harga',
        'image',
    ];

}
