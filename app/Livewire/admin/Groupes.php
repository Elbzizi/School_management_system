<?php

namespace App\Livewire\Admin;

use App\Models\Cycle;
use App\Models\Groupe;
use App\Models\Niveau;
use Livewire\Component;

class Groupes extends Component
{
  public $prefix_Groupe_Number, $prefix_Niveau, $capacite, $prefix, $selectedNiveau;
  public $cycles, $niveaux, $groupes;
  public $notification, $type_notification;

  // public $niveaux;
  public function mount()
  {
    $this->niveaux = Niveau::get();

  }
  public function render()
  {

    $this->cycles = Cycle::with('niveaux.groupes')->get();

    return view('livewire.admin.groupes');
  }
  public function checkgroupe()
  {
    $this->capacite = '25';
    $nom_Niveau = Niveau::where('id', $this->prefix_Niveau)->value('nom');
    $this->prefix = $nom_Niveau . '(' . $this->prefix_Groupe_Number . ')';
    $groupe = Groupe::where('nom', $this->prefix)->exists();
    if ($groupe) {
      $this->notification = 'Le Groupe Exist';
      $this->type_notification = 'alert-danger';
    } else {
      Groupe::create([
        'nom' => $this->prefix,
        'capacite' => $this->capacite,
        'niveau_id' => $this->prefix_Niveau,
      ]);
      $this->notification = 'Le Groupe Ajouter';
      $this->type_notification = 'alert-success';
    }
  }

  public function selectNiveau($niveauId)
  {
    $this->selectedNiveau = Niveau::with('groupes')->find($niveauId);
    $this->groupes = $this->selectedNiveau->groupes ?? [];
  }


}
