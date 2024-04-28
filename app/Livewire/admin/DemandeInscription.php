<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;

class DemandeInscription extends Component

{

    public $desactiveEtudiants ;
    public $selectedetudiants = [];
    public $selectAll ;
    public $showEtudiantDetails ;

    public function mount()
    {
        $this->selectedetudiants = new Collection();

    }


    public function render(){
        $this->desactiveEtudiants = User::where('statut','desactive')->get();

        return view('livewire.admin.demande-inscription');}



    public function selectOne($id)
    {


        $selectedetudiants = $this->selectedetudiants->toArray();

        if(count($selectedetudiants)>0){
            $selectedetudiants[] = $id;
            $this->showEtudiant(end($selectedetudiants) ?? null);
        }
        else{
            
            $this->showEtudiantDetails = null;
        }
    }




    public function accepter($id = null){
        if ($id !== null) {
            $etudiantt =User::find($id);
            $etudiantt->statut = 'active';
            $etudiantt->save();
            session()->flash('success', 'L`étudiant a été accepté avec succès.');

        } else {
            if($this->selectedetudiants){
                foreach ($this->selectedetudiants as $etudiant_Id) {
                    $etudiant = User::find($etudiant_Id);
                    $etudiant->statut = 'active';
                    $etudiant->save();
                }
            }
            else{
                User::where('statut','desactive')->update(['statut' => 'active']);
                session()->flash('success', 'Tous les etudiants ont été activés');
            }
            session()->flash('success', 'Les étudiants sélectionnés ont été acceptés avec succès.');
            $this->selectedetudiants = new Collection();

        }
        $this->showEtudiantDetails = null;


    }



    public function refuser(){
        dd('non');
    }

    public function showEtudiant($id) {
        $this->showEtudiantDetails = User::findorFail($id);
    }
}
