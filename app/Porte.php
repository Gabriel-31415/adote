<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    protected $fillable = [
        'tamanho'
    ];

    public function animails()
    {
        return $this->hasMany('App\Animal');
    }
}
