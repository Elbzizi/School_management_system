<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'niveaux';
    protected $fillable = ['nom_niveaux', 'cycle_id'];

    public function cycle()
    {
        return $this->belongsTo(cycle::class, 'cycle_id');
    }

    public function class()
    {
        return $this->hasMany(Classe::class);
    }
}
