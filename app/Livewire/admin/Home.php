<?php

namespace App\Livewire\admin;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $nombreInscription;
    public $nombreEtudiant_Accepter;
    public function render()
    {
        $this->nombreInscription = User::where('statut','desactive')->count();
        $this->nombreEtudiant_Accepter = User::where('statut','active')->count();
        return view('livewire.admin.home');
    }
}
