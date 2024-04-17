<?php

namespace App\Livewire\admin;

use Livewire\Component;
use App\Models\Cycle;

class CycleEtude extends Component
{

    public $cycles ;
    public $nom;
    public $description;


    public function mount(){
        
        $this->cycles = Cycle::all();
    }
    public function render()
    {
        return view('livewire.admin.cycle-etude');
    }
    public function store(){
        Cycle::create([
            'nom_cycle' => $this->nom,
            'description' => $this->description,
        ]);
        $this->reset(['nom','description']);
        $this->dispatch('close-modal');

        $this->cycles = Cycle::all();

    }
    public function supprimer($cycle_id){
        $cycles = Cycle::findorFail($cycle_id);
        $cycles->delete();
        session()->flash('success', 'Cycle étude supprimé avec succès!');
        $this->cycles = Cycle::all();
    }   
}
