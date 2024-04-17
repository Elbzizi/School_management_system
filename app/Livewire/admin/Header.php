<?php

namespace App\Livewire\admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{

    public $name;
    public $prenom;
    public $role;

    public function mount(){
        $admin = Auth::guard('admin')->user();
            $this->name = $admin->name;
            $this->prenom = $admin->prenom;
            $this->role = $admin->role;

    }
    public function render()
    {
        return view('livewire.admin.header');

    }
}
