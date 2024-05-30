<?php

namespace App\Livewire\Admin;

use App\Models\Cycle;
use App\Models\Groupe;
use App\Models\Niveau;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class DemandeInscription extends Component
{
  public $cycles, $niveaux, $groupes;
  public $cycle, $niveau, $groupe;

  public $id, $name, $prenom, $sexe, $cin, $photo, $adress, $role, $dateNaissance, $statut, $tel, $email, $password;
  public $desactiveEtudiants, $selectAll, $showEtudiantDetails, $notification;
  public $selectedetudiants = [];


  public function mount()
  {

    $this->selectedetudiants = new Collection();
  }


  // ==========================render=========================================================
  public function render()
  {

    $this->cycles = Cycle::get();
    $this->niveaux = Niveau::where('cycle_id', $this->cycle)->get();
    $this->groupes = Groupe::where('niveau_id', $this->niveau)->get();

    $this->desactiveEtudiants = User::where('statut', 'desactive')->get();
    return view('livewire.admin.demande-inscription');
  }

  // ==========================updatedcycle=========================================================
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
  // ==========================select one=========================================================
  public function selectOne($id)
  {

    $selectedetudiants = $this->selectedetudiants->toArray();

    if (count($selectedetudiants) > 0) {
      $selectedetudiants[] = $id;
      $this->showEtudiant(end($selectedetudiants) ?? null);
    } else {
      $this->showEtudiantDetails = null;
    }
  }

  public function accepter($id = null)
  {
    if ($id !== null) {
      $etudiantt = User::find($id);
      $etudiantt->statut = 'active';
      $etudiantt->save();
      // $this->notification= "L'etudiant a été accepté avec succès.";
      toastr()->success("L'etudiant a été accepté avec succès.");

    } else {
      if ($this->selectedetudiants) {
        foreach ($this->selectedetudiants as $etudiant_Id) {
          $etudiant = User::find($etudiant_Id);
          $etudiant->statut = 'active';
          $etudiant->save();
        }
        // $this->notification= "L'etudiant a été accepté avec succès.";
        toastr()->success("L'etudiant a été accepté avec succès.");

      } else {
        User::where('statut', 'desactive')->update(['statut' => 'active']);
        // $this->notification = "Tous les étudiants ont été activés";
        toastr()->success("Tous les étudiants ont été activés");

      }
      // $this->notification = "LLes étudiants sélectionnés ont été acceptés avec succès.";
      toastr()->success("Les étudiants sélectionnés ont été acceptés avec succès.");

      $this->selectedetudiants = new Collection();

    }
    $this->selectedetudiants = new Collection();
    $this->showEtudiantDetails = null;


  }



  public function refuser()
  {
    dd('non');
  }

  public function showEtudiant($id)
  {
    $this->showEtudiantDetails = User::findorFail($id);
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
      'date_naissane' => $this->dateNaissance,
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
}
