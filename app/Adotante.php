<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adotante extends Model
{
    protected $fillable = [

    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
