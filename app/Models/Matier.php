<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matier extends Model
{
	use HasFactory;
	protected $guarded = [];

	// public function matieres()

    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }

    public function groupes()
    {
        return $this->belongsToMany(Groupe::class);
    }


	// public function examen()
	// {
	// 	return $this->hasMany(Examen::class);
	// }


}
