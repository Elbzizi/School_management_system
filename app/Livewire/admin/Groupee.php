<?php

namespace App\Livewire\Admin;

use App\Models\Groupe;
use Livewire\Component;
use Illuminate\Support\Collection;

class Groupee extends Component
{
    public $id_route , $etudiants, $groupe ,$niveau , $cycle, $groupName;


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

        // dd($this->etudiant);
        return view('livewire.admin.groupee');
    }


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

}
