<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Model_has_permission extends Model
{
    protected $fillable = [
        'tipo',
        'status',
        'tags',
        'prioridade',
        'area'
    ];
}
