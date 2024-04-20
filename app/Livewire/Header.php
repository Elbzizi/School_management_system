<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{

    public $name;
    public $prenom;
    public $role;


    public function mount(){
        if ($user = Auth::guard('admin')->user()) {
            $this->name = $user->name;
            $this->prenom = $user->prenom;
            $this->role = $user->role;            
        }
        if ($user = Auth::guard('web')->user()){
            $this->name = $user->name;
            $this->prenom = $user->prenom;
            $this->role = $user->role;  
        }
  

    }
    public function render()
    {
        return view('livewire.include.header');

    }
}
