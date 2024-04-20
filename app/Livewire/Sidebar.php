<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public $name;
    public $prenom;
    public $sexe;
    public $cin;
    public $photo;
    public $adress;
    public $role;
    public $statut;

    public function mount()
    {
        // Fetch admin details directly from the database
        $admin = Auth::guard('admin')->user();

        // Ensure that the user is an admin and fetch the name and prenom
        if ($admin) {

            
            $this->name = $admin->name;
            $this->prenom = $admin->prenom;
            $this->sexe = $admin->sexe;
            $this->photo = $admin->photo;
            $this->adress = $admin->adress;
            $this->cin = $admin->cin;
            $this->tel = $admin->tel;
            $this->email = $admin->email;
            $this->role = $admin->role;
            $this->statut = $admin->statut;

        }
    }
    public function render()
    {
        return view('livewire.include.sidebar');
    }
}
