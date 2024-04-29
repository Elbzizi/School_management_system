<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;

class DemandeInscription extends Component

{
    public $id, $name, $prenom, $sexe, $cin, $photo, $adress, $role, $dateNaissance, $statut, $tel, $email, $password;
    public $desactiveEtudiants ;
    public $selectedetudiants = [];
    public $selectAll ;
    public $showEtudiantDetails ;

    public function mount()
    {
        $this->selectedetudiants = new Collection();

    }


    public function render(){
        $this->desactiveEtudiants = User::where('statut','desactive')->get();

        return view('livewire.admin.demande-inscription');}



    public function selectOne($id)
    {


        $selectedetudiants = $this->selectedetudiants->toArray();

        if(count($selectedetudiants)>0){
            $selectedetudiants[] = $id;
            $this->showEtudiant(end($selectedetudiants) ?? null);
        }
        else{

            $this->showEtudiantDetails = null;
        }
    }

    public function accepter($id = null){
        if ($id !== null) {
            $etudiantt =User::find($id);
            $etudiantt->statut = 'active';
            $etudiantt->save();
            session()->flash('success', 'L`étudiant a été accepté avec succès.');

        } else {
            if($this->selectedetudiants){
                foreach ($this->selectedetudiants as $etudiant_Id) {
                    $etudiant = User::find($etudiant_Id);
                    $etudiant->statut = 'active';
                    $etudiant->save();
                }
            }
            else{
                User::where('statut','desactive')->update(['statut' => 'active']);
                session()->flash('success', 'Tous les etudiants ont été activés');
            }
            session()->flash('success', 'Les étudiants sélectionnés ont été acceptés avec succès.');
            $this->selectedetudiants = new Collection();

        }
        $this->showEtudiantDetails = null;


    }



    public function refuser(){
        dd('non');
    }

    public function showEtudiant($id) {
        $this->showEtudiantDetails = User::findorFail($id);
    }
     // create ------------------------------------------------------------------
     protected $rules = [
        'name' => 'required|min:3',
        'prenom' => 'required|min:3',
        'sexe' => 'required',
        'cin' => 'required|min:8|max:8',
        'photo' => 'required',
        'adress' => 'required',
        'statut' => 'required',
        'tel' => 'required|min:8|max:8',
        'email' => 'required|email|unique:users',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->resetValidation();
    }

    public function create() {

        $this->validate();
        $password = $this->cin;
        User::create([
            'name' => $this->name,
            'prenom' => $this->prenom,
            'sexe' => $this->sexe,
            'cin' => $this->cin,
            'photo' => $this->photo,
            'adress' => $this->adress,
            'role' => $this->role,
            'date_naissane' =>$this->dateNaissance,
            'statut' => $this->statut,
            'tel' => $this->tel,
            'email' => $this->email,
            'password' =>$password,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $this->resetInput();
        $this->successMessage = "L'étudiant a été ajouté avec succès";
        $this->dispatch('close-modal');

    }

    // resetInput ------------------------------------------------------------------
    public function resetInput() {

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
