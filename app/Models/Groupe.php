<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
  use HasFactory;
  protected $guarded = [];
  protected $fillable = [
    'nom',
    'capacite',
    'niveau_id',
  ];
  public function niveau()
  {
    return $this->belongsTo(Niveau::class);
  }


  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function admins()
  {
    return $this->belongsToMany(Admin::class, 'admin_matier_groupe', 'groupe_id', 'admin_id');
  }

  public function matieres()
  {
    return $this->belongsToMany(Matier::class, 'admin_matier_groupe', 'groupe_id', 'matier_id');
  }

}
