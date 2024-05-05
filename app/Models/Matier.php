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
    return $this->belongsToMany(Admin::class, 'admin_matier_groupe', 'matier_id', 'admin_id');
  }

  public function groupes()
  {
    return $this->belongsToMany(Groupe::class, 'admin_matier_groupe', 'matier_id', 'groupe_id');
  }




  
}


