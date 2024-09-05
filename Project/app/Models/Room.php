<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'dispo',
        'preco',
        'tipo',
        'nome'
    ];
}
