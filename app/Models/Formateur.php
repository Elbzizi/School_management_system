<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function classe()
	{
		return $this->belongsToMany(Classe::class,"Matiers");
	}
}
