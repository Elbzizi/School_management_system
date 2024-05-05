<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_matier_groupe extends Model
{
  use HasFactory;
  protected $table = "admin_matier_groupe";
  protected $fillable = [
    'matier_id',
    'admin_id',
    'groupe_id',
  ];
}
