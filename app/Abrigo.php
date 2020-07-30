<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abrigo extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'endereco_id', 'protetor_id'
    ];

    public function endereco()
    {
        return $this->belongsTo('App\Endereco');
    }

    public function protetors(){
        return $this->hasMany('App\Protetor');
    }

}
