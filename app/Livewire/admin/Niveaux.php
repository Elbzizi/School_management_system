<?php

namespace App\Livewire\Admin;

use App\Models\Groupe;
use App\Models\Niveau;
use Livewire\Component;

class Niveaux extends Component
{

    public $niveaux , $groupes , $nom_niveau , $groupeNumero , $notification , $type_notification ;

    public function mount($id)
    {
        $this->niveaux = Niveau::findOrFail($id);
    }
    public function render()
    {

        $this->groupes = $this->niveaux->groupes;
        // dd($this->groupes);
        return view('livewire.admin.niveaux');
    }

    public function checkgroupe() {
        if($this->groupeNumero !== null){
            $this->capacite = '25';
            $this->nom_niveau = $this->niveaux->nom;
            $niveau_id = $this->niveaux->id;
            $fullgroupe_nom= $this->nom_niveau.'('.$this->groupeNumero.')';

            $groupe = Groupe::where('nom',$fullgroupe_nom)->exists();

            if($groupe){
                $this->notification = 'Le Groupe Exist';
                $this->type_notification = 'alert-warning';
            }
            else
            {
                Groupe::create([
                    'nom' => $fullgroupe_nom,
                    'capacite'=>$this->capacite,
                    'niveau_id'=>$niveau_id,
                ]);
                $this->notification = 'Le Groupe Ajouter';
                $this->type_notification = 'alert-success';
            }


        }
        else{
            $this->render();
        }

    }
    public function delete($id) {
        $groupe = Groupe::findOrFail($id);
        $groupe->delete();
        $this->notification = 'Le Groupe Supprimer';
        $this->type_notification = 'alert-danger';
    }
}
