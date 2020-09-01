<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nome',
        'cognome',
        'voto',
        'nome_classe'
    ];
}


