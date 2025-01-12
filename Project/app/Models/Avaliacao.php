<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $fillable = [
        'msg',
        'avaliacoes',
        'rate',
        'userId',
        'roomId'
    ];






    public function avaliacao()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
