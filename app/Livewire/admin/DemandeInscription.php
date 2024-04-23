<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DemandeInscription extends Component

{

    public $desactiveEtudiants ;
    public $selectedetudiants = [];
    public $selectAll ;

    public function mount()
    {
        // dd($this->desactiveEtudiants);
    }
    public function render()
    {
        $this->desactiveEtudiants = User::where('statut','desactive')->get();
        return view('livewire.admin.demande-inscription');
    }
    public function accepter(){

        if ($this->selectAll) {
            User::where('statut','desactive')->update(['statut' => 'active']);
            session()->flash('success', 'Tous les etudiants ont été activés');

        }else {
            foreach ($this->selectedetudiants as $etudiant_Id) {
                $etudiant = User::find($etudiant_Id);
                
                $etudiant->statut = 'active';
                $etudiant->save();
            }
            session()->flash('success', 'Les étudiants sélectionnés ont été acceptés avec succès.');

            $this->selectedetudiants = [];
            
        }
        
    }
    public function refuser(){
        dd('non');
    }
}
