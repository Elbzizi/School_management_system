<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;
    protected $fillable = ['nom_cycle','description'];
    protected $table = 'cycles';
    protected $guarded = [];

    
    public function niveau()
    {
        $this->hasMany(Niveau_etude::class);
    }
}
