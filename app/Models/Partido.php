<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function Gols (){
        return $this->hasMany('App\Models\Gol');
    }
    public function Equipos (){
        return $this->belongsToMany('App\Models\Equipo');
    }
}
