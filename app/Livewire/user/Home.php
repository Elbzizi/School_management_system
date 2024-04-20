<?php

namespace App\Livewire\user;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public $statut;
    public function mount(){
        $user = Auth::guard('web')->user();
        $this->statut = $user->statut;
        // dd($this->statut);
    }
    public function render()
    {
        return view('livewire.user.home');
    }
}
