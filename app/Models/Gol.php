<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;
    public function Jugador (){
        return $this->belongsTo('App\Models\Jugador');
    }

    public function Partido (){
        return $this->belongsTo('App\Models\Partido');
    }
    
}
