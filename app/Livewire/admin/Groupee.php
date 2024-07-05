<?php

namespace App\Livewire\Admin;

use App\Models\Groupe;
use App\Models\Absence;
use Livewire\Component;
use Illuminate\Support\Collection;

class Groupee extends Component
{
    public $id_route , $etudiants, $groupe ,$niveau , $cycle, $groupName;
<<<<<<< HEAD

    public $selectedGroupe = null;
    public $selectedEtudiant = null;
    public $matierId;
    public $matieres;
    public $Matier;

    public $justification;
    public $date;
    public $studentIdToRemove;
=======
>>>>>>> b657c9b96ed12f65e6d7b05f791b40265a781d62


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

<<<<<<< HEAD
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


=======

    public function retire($studentId)
    {
        $this->studentIdToRemove = $studentId;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function deleteStudent()
    {
        // Logic to delete the student from the group
        // You can use $this->studentIdToRemove to access the ID of the student to delete
        // Once the deletion is successful, you can emit an event to refresh the data
        $this->emit('studentDeleted');
        // Close the modal after deletion
        $this->dispatchBrowserEvent('closeDeleteModal');
    }
>>>>>>> b657c9b96ed12f65e6d7b05f791b40265a781d62

}
