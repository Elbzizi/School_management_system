<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle_detude extends Model
{
    use HasFactory;
    public function niveau(){
        $this->hasMany(Niveau_etude::class);
    }
}
