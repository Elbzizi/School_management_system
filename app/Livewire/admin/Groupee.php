<?php

namespace App\Livewire\Admin;

use App\Models\Groupe;
use App\Models\Absence;
use Livewire\Component;
use Illuminate\Support\Collection;

class Groupee extends Component
{
    public $id_route , $etudiants, $groupe ,$niveau , $cycle, $groupName;

    public $selectedGroupe = null;
    public $selectedEtudiant = null;
    public $matierId;
    public $matieres;
    public $Matier;

    public $justification;
    public $date;
    public $studentIdToRemove;


    public function mount($id) {
        $this->id_route = $id;
    }
    public function render()
    {
        $this->groupe = Groupe::find($this->id_route);
        $this->groupName = $this->groupe->nom;
        $this->niveau = $this->groupe->niveau;
        $this->cycle = $this->niveau->cycle;
        $this->etudiants = $this->groupe->users;
        $this->matieres = $this->groupe->matiers;


        // dd($this->etudiant);
        return view('livewire.admin.groupee');
    }

    public function submit()
    {
        // $this->validate([
        //     'selectedEtudiant' => 'required',
        //     'matierId' => 'required',
        //     'justification' => 'required',
        //     'date' => 'required|date',
        // ]);

        Absence::create([
            'user_id' => $this->selectedEtudiant,
            'matier' => $this->Matier,
            'justife' => $this->justification,
            'description' =>'null',
            'date_Absences' => $this->date,
        ]);

        toastr()->success('Absence recorded successfully.');
        $this->selectedEtudiant = '';
        $this->matierId = '';
        $this->justification = '';
        $this->date = '';
        

    }



}
