<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use App\Models\Groupe;
use App\Models\Matier;
use App\Models\admin_matier_groupe;
use Livewire\Component;

class Matiers extends Component
{
    public $matiers ,$matier ,$coeff ,$duree , $enseignants , $enseignant ,$groupes , $groupe, $pivots;
    public $admin_id , $matier_id , $groupe_id;
    public function render()
    {
        $this->matier = '';
        $this->coeff = '';
        $this->duree = '';
        $this->matiers = Matier::get();
        $this->enseignants = Admin::where('role','enseignant')->get();
        $this->groupes = Groupe::get();
        $this->pivots = Admin::with(['matiers' => function ($query) {
            $query->withPivot('groupe_id');
        }])->get();

        return view('livewire.admin.matiers');
    }
    public function create() {

       if(
        Matier::create([
            'nom_matier' => $this->matier,
            'Coefficient' => $this->coeff,
            'duree' => $this->duree,
        ])
       ){
        toastr()->success('Matier Ajouté');
       }


    }
    public function resetInput() {
        $this->matier = null;
        $this->coeff = null;
        $this->duree = null;
    }
    public function affecter()
    {
        // Check if the combination already exists
        $exists = admin_matier_groupe::where('groupe_id', $this->groupe_id)
                                    ->where('admin_id', $this->admin_id)
                                    ->where('matier_id', $this->matier_id)
                                    ->exists();

        if ($exists) {
            toastr()->error('Cette combinaison groupe-enseignant-matière existe déjà.');
        } else {
            try {
                admin_matier_groupe::create([
                    'groupe_id' => $this->groupe_id,
                    'admin_id' => $this->admin_id,
                    'matier_id' => $this->matier_id,
                ]);

                toastr()->success('Affectation réussie');
            } catch (QueryException $e) {
                \Log::error($e->getMessage());
                toastr()->error('Erreur lors de l\'affectation: ' . $e->getMessage());
            }
        }
    }

}
