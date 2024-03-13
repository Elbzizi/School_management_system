<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau_etude extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function cycle()
    {
        return $this->belongsTo(Cycle_detude::class, 'Cycle_detude_id');
    }

    public function class()
    {
        return $this->hasMany(Classe::class);
    }
}
