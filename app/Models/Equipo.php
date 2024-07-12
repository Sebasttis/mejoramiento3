<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    public function Presidente (){
        return $this->hasOne('App\Models\Presidente');
    }
   
    public function Jugadors (){
        return $this->hasMany('App\Models\Jugador');
    }
    public function Partidos (){
        return $this->belongsToMany('App\Models\Partido');
    }
}
