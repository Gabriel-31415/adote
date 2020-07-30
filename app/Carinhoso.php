<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carinhoso extends Model
{
    protected $fillable = [
        'grau'
    ];

    public function animails()
    {
        return $this->hasMany('App\Animal');
    }
}
