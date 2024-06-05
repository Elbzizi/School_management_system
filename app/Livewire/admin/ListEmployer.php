<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListEmployer extends Component
{
  use WithFileUploads;

  public $Employers, $name, $prenom, $sexe, $dateNaissance, $cin, $adress, $matier, $email, $tel, $photo, $password, $inputrole;
  public $role;

  public function mount()
  {
    $this->Employers = Admin::where('role', '!=', 'directeur')->get();
  }
  public function render()
  {
    return view('livewire.admin.list-employer');
  }
  public function filter()
  {
    if ($this->role === 'all') {
      $this->Employers = Admin::where('role', '!=', 'directeur')->get();
    } else {
      $this->Employers = Admin::where('role', $this->role)->get();
    }
  }

  protected $rules = [
    'name' => 'required|max:50',
    'prenom' => 'required|max:50',
    'sexe' => 'required',
    'dateNaissance' => 'required',
    'cin' => 'required|min:8|max:8',
    'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    'adress' => 'required|min:5|max:250',
    'email' => 'required|email',
    'tel' => 'required|min:10|max:10',
    'inputrole' => 'required'
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
    $this->resetValidation();
  }

  public function addEmployer()
  {
    $this->validate();

    $password = $this->cin;
    $path = $this->photo?->store("Profile_Image");
    // dd($path);
    Admin::create([
      'name' => $this->name,
      'prenom' => $this->prenom,
      'sexe' => $this->sexe,
      'dateNaissance' => $this->dateNaissance,
      'cin' => $this->cin,
      'adress' => $this->adress,
      // 'matier'=>$this->matier,
      'email' => $this->email,
      'tel' => $this->tel,
      'photo' => $path,
      'password' => bcrypt($password),
      'role' => $this->inputrole,
    ]);
    $this->resetInput();
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
    $this->password = null;
  }

  public function supprimer($id)
  {
    $admin = Admin::find($id);
    if ($admin) {
      $admin->delete();
      toastr()->success("admin supprimé avec succès");
    } else {
      toastr()->error('An error has occurred please try again later.');
    }
  }
}


