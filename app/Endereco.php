<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cidade','uf', 'cep',
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function abrigo(){
        return $this->hasOne('App\Abrigo');
    }
}
