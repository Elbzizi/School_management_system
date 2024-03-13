<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function niveaux()
    {
        return $this->belongsTo(Niveau_etude::class, 'niveau_etude_id');
    }


    public function etudient()
    {
        return $this->hasMany(Etudent::class);
    }

    public function foemateur()
    {
        return $this->belongsToMany(Formateur::class, "matiers");
    }
}
