<?php

namespace App\Livewire\admin;

use Livewire\Component;
use App\Models\Cycle;

class CycleEtude extends Component
{

  public $cycles;
  public $id;
  public $nom;
  public $description;
  public $isAdd = true;



  public function mount()
  {

    $this->cycles = Cycle::all();
  }
  public function render()
  {
    return view('livewire.admin.cycle-etude');
  }
  // store ---------------------------------------------------------
  public function store()
  {
    if ($this->isAdd) {
      Cycle::create([
        'nom_cycle' => $this->nom,
        'description' => $this->description,

      ]);
    } else {
      $cycles = Cycle::findorFail($this->id);
      $cycles->update([
        'nom_cycle' => $this->nom,
        'description' => $this->description,
      ]);
    }
    $this->resetForm();
    toastr()->success("Cycle Bien Ajouter ");
    $this->dispatch('close-modal');
    $this->cycles = Cycle::all();

  }
  // supprimer ---------------------------------------------------------
  public function supprimer($cycle_id)
  {
    $cycles = Cycle::findorFail($cycle_id);
    $cycles->delete();
    // session()->flash('success', 'Cycle étude supprimé avec succès!');
    toastr()->success("Cycle étude supprimé avec succès!");

    $this->cycles = Cycle::all();
  }
  // affichage de modal ---------------------------------------------------------
  public function ajouterModal()
  {
    $this->isAdd = true;

  }
  public function modifierModal($id)
  {
    $this->isAdd = false;
    $this->resetForm();
    $cycles = Cycle::findorFail($id);
    $this->id = $id;
    $this->nom = $cycles->nom_cycle;
    $this->description = $cycles->description;

  }
  public function resetForm()
  {
    $this->id = null;
    $this->nom = null;
    $this->description = null;
  }
}

