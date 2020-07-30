<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'imagem', 'animal_id'
    ];

    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }

}
