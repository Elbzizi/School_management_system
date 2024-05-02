<?php

namespace App\Models;

use App\Models\Groupe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'niveaux';
    protected $fillable = ['nom', 'cycle_id'];

    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle_id');
    }

    public function groupes()
    {
        return $this->hasMany(Groupe::class);
    }
}
