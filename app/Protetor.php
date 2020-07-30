<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protetor extends Model
{
    protected $fillable = [
        'CPF'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function abrigo(){
        return $this->belongsTo('App\Abrigo');
    }


}
