<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camareira extends Model
{
    protected $fillable = [
        'tipo',
        'status',
        'tags',
        'prioridade',
        'area'
    ];
}
