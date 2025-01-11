<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'dt-checkin',
        'dt-checkout',
    ];



public function reservas(){
return $this->belongsToMany('App\Models\User');
}
}

