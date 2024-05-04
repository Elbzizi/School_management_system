<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ListEtudiant extends Component
{


    public $id, $name, $prenom, $sexe, $cin, $photo, $adress, $role, $dateNaissance, $statut, $tel, $email, $password , $groupes;
    public $search;
    public $successMessage;


    public function mount()
    {
        $this->search = '';
    }

    public function render()
    {
        // $this->groupes = User::with('groupe')->get();
        $etudiants = User::with('groupe')->where('statut','active')
        ->where(function($query){
            $query->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('prenom', 'like', '%' . $this->search . '%');
        })
        ->orderBy('name', 'asc')
        ->orderBy('prenom', 'asc')
        ->paginate(10);
        // dd($etudiants);

        return view('livewire.admin.list-etudiant', [
            'etudiants' => $etudiants,

        ]);
        $this->search = '';
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
