<?php

namespace App\Livewire\Admin;

use App\Models\Groupe;
use Livewire\Component;
use Illuminate\Support\Collection;

class Groupee extends Component
{
    public $id_route , $etudiants, $groupe ,$niveau , $cycle;


    public function mount($id) {
        $this->id_route = $id;
    }
    public function render()
    {
        $this->groupe = Groupe::find($this->id_route);
        $this->niveau = $this->groupe->niveau;
        $this->cycle = $this->niveau->cycle;
        $this->etudiants = $this->groupe->users;

        // dd($this->etudiant);
        return view('livewire.admin.groupee');
    }

    public function retire() {
        $this->groupe = Groupe::find($this->id_route);
        dd($this->groupe);
    }
}
