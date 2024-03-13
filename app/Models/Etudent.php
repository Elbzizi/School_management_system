<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function parent()
    {
        return $this->hasMany(Parente::class);
    }

    public function abssence()
    {
        return $this->hasMany(Absence::class);
    }
}

