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
    public $search;
    public $successMessage;


    public function mount()
    {
        $this->search = '';
    }

    public function render()
    {
        $etudiants = User::where('statut','active')
        ->where(function($query){
            $query->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('prenom', 'like', '%' . $this->search . '%');
        })
        ->orderBy('name', 'asc')    
        ->orderBy('prenom', 'asc')
        ->paginate(10);

        return view('livewire.admin.list-etudiant', [
            'etudiants' => $etudiants,
        ]);
    }
    // delete ------------------------------------------------------------------
    public function delete($id){
        $etudiants = User::find($id);
        if($etudiants){
            $etudiants->delete();
            $this->successMessage = 'Etudiant supprimé avec succès';
            // dd($this->successMessage);
            session()->flash('successMessage', 'Etudiant supprimé avec succès');
        }
        else{
            session()->flash('error', 'Étudiant non trouvé.');
        }
    }
    // filter ------------------------------------------------------------------


    public function filter()
    {
        // $this->resetPage(); // Reset pagination to the first page when filtering
    }
    public function clearSearch()
    {
        $this->search = '';
        // $this->resetPage(); // Reset pagination to the first page when clearing search
    }

}
