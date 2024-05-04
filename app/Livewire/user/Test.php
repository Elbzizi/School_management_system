<?php

namespace App\Livewire\User;

use Livewire\Component;

class Test extends Component
{
  public $message="";
  public function render()
  {
    return view('livewire.user.test');
  }

}
