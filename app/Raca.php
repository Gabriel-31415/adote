<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function animails()
    {
        return $this->hasMany('App\Animal');
    }
}
