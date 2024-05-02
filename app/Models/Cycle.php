<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cycle extends Model
{
    use HasFactory;
    protected $fillable = ['nom_cycle','description'];
    protected $table = 'cycles';
    protected $guarded = [];


    public function niveaux()
    {
       return $this->hasMany(Niveau::class);
    }
}
