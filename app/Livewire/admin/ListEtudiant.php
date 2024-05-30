<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\Cycle;
use App\Models\Groupe;
use App\Models\Niveau;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ListEtudiant extends Component
{

  public $cycles, $niveaux, $groupes;
  public $cycle, $niveau, $groupe;
  public $id, $name, $prenom, $sexe, $cin, $photo, $adress, $role, $dateNaissance, $statut, $tel, $email, $password;
  public $search;
  public $successMessage;


  public function mount()
  {
    $this->search = '';
  }

  public function render()
  {
    $etudiants = User::with('groupe')->where('statut', 'active')->where(function ($query) {
      $query->where('name', 'like', '%' . $this->search . '%')->orWhere('prenom', 'like', '%' . $this->search . '%');
    })->orderBy('name', 'asc')->orderBy('prenom', 'asc')->paginate(10);

    $this->cycles = Cycle::get();
    $this->niveaux = Niveau::where('cycle_id', $this->cycle)->get();
    $this->groupes = Groupe::where('niveau_id', $this->niveau)->get();

    return view('livewire.admin.list-etudiant', [
      'etudiants' => $etudiants,

    ]);
    $this->search = '';
  }
  // updated  ------------------------------------------------------------------
  public function updatedCycle($value)
  {
    // Fetch levels based on the selected cycle
    $this->niveaux = Niveau::where('cycle_id', $this->cycle)->get();

    $this->reset('niveau', 'groupe');
  }

  // ==========================updatedniveau=========================================================
  public function updatedNiveau($value)
  {
    // Fetch groups based on the selected niveau
    $this->groupes = Groupe::where('niveau_id', $this->niveau)->get();
    $this->reset('groupe');
  }
  // create ------------------------------------------------------------------
  protected $rules = [
    'name' => 'required|min:3|max:50',
    'prenom' => 'required|min:3|max:50',
    'sexe' => 'required',
    'cin' => 'required|min:8|max:8',
    'dateNaissance' => 'required',
    // 'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    'adress' => 'required|min:5|max:250',
    'tel' => 'required|min:10|max:10',
    'email' => 'required|email',

  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
    $this->resetValidation();
  }

  public function create()
  {
    $this->validate();
    $this->password = $this->cin;
    User::create([
      'name' => $this->name,
      'prenom' => $this->prenom,
      'sexe' => $this->sexe,
      'cin' => $this->cin,
      // 'photo' => $this->photo,
      'adress' => $this->adress,
      'date_naissance' => $this->dateNaissance,
      'tel' => $this->tel,
      'email' => $this->email,
      'password' => $this->password,
      'groupe_id' => $this->groupe,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
    $this->resetInput();
    // $this->notification = "L'étudiant a été ajouté avec succès";
    toastr()->success("L'étudiant a été ajouté avec succès");
    $this->dispatch('close-modal');

  }
  // resetInput ------------------------------------------------------------------
  public function resetInput()
  {

    $this->name = null;
    $this->prenom = null;
    $this->sexe = null;
    $this->cin = null;
    $this->photo = null;
    $this->adress = null;
    $this->statut = null;
    $this->tel = null;
    $this->email = null;
  }



















  // delete ------------------------------------------------------------------
  public function delete($id)
  {
    $etudiants = User::find($id);
    if ($etudiants) {
      $etudiants->delete();
      $this->successMessage = 'Etudiant supprimé avec succès';
      // dd($this->successMessage);
      session()->flash('successMessage', 'Etudiant supprimé avec succès');
    } else {
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
