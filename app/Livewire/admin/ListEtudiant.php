<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ListEtudiant extends Component
{


    public $id;
    public $name;
    public $prenom;
    public $sexe;
    public $cin;
    public $photo;
    public $adress;
    public $role;
    public $statut;
    public $tel;
    public $email;
    public $etudiants;

    public function mount(){
        $this->etudiants = User::All();
    }
    public function render()
    
    {
        return view('livewire.admin.list-etudiant');
    }
    // delete ------------------------------------------------------------------
    public function delete($id){
        $etudiants = User::find($id);
        $etudiants->delete();
        $this->etudiant = User::all();
        
        session()->flash('message', 'Etudiant supprimé avec succès');
    }
    // filter ------------------------------------------------------------------
    public $search;
    public function filter(){
        // $this->etudiant = User::where('name', 'like', '%'.$this->search.'%')->get();
        $this->etudiants = User::where('name', 'like', '%'.$this->search.'%')->orWhere('prenom','like','%'.$this->search.'%')->get();
        $this->search = '';
    }
}
