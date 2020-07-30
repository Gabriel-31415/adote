<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function animails()
    {
        return $this->hasMany('App\Animal');
    }
}
