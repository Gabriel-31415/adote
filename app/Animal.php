<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'data_nascimento', 'sexo', 'cores',
        'adotante_id', 'especie_id', 'raca_id', 'porte_id', '',
        'sociabilidade_id', 'carinhoso_id'
    ];

    public function porte()
    {
        return $this->belongsTo('App\Porte');
    }

    public function raca()
    {
        return $this->belongsTo('App\Raca');
    }

    public function sociabilidade()
    {
        return $this->belongsTo('App\Sociabilidade');
    }

    public function carinhoso()
    {
        return $this->belongsTo('App\Carinhoso');
    }

    public function especie()
    {
        return $this->belongsTo('App\Especie');
    }

    public function adotante()
    {
        return $this->belongsTo('App\Adotante');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
