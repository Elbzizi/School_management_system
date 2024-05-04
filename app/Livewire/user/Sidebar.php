<?php

namespace App\Livewire\user;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public $userName;
    public $userPrenom;
    public $userrole;

    public function mount()
    {
        // Fetch admin details directly from the database
        $user = Auth::guard('web')->user();

        // Ensure that the user is an admin and fetch the name and prenom
        if ($user) {
            $this->userName = $user->name;
            $this->userPrenom = $user->prenom;
            $this->userrole = $user->role;

        }
    }
    public function render()
    {
        return view('livewire.user.sidebar');
    }
}
