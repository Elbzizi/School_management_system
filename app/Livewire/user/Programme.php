<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Programme extends Component
{
  public $user;
  public function render()
  {
    $this->user = Auth::user();
    
    return view('livewire.user.programme');
  }
}
