<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome', 'cep', 'populacao', 'estado_id'];

    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
}
