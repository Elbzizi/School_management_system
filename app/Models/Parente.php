<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
	{
		return $this->hasMany(user::class);
	}
}
