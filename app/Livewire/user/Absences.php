<?php

namespace App\Livewire\User;

use App\Models\Absence;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Absences extends Component
{
  public $absences, $id;
  public function render()
  {
    $this->id = Auth::user()->id;
    $this->absences = Absence::where('user_id', $this->id)->orderBy('date_Absences')->get();
    return view('livewire.user.absences');
  }
}
