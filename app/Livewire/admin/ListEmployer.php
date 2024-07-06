<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListEmployer extends Component
{
  use WithFileUploads;

  public $Employers, $name, $prenom, $sexe, $dateNaissance, $cin, $adress, $matier, $email, $tel, $photo, $password, $inputrole;
  public $role;

  public function mount()
  {
  }
  public function render()
  {
    $this->Employers = Admin::get();
    return view('livewire.admin.list-employer');
  }
  public function filter()
  {
    if ($this->role === 'all') {
      $this->Employers = Admin::get();
    } else {
      $this->Employers = Admin::where('role', $this->role)->get();
    }
  }

  protected $rules = [
    'name' => 'required|max:50',
    'prenom' => 'required|max:50',
    'sexe' => 'required',
    'dateNaissance' => 'required|date',
    'cin' => 'required|size:8',
    'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:8000',
    'adress' => 'required|min:5|max:250',
    'email' => 'required|email',
    'tel' => 'required|digits:10',
    'inputrole' => 'required'
  ];


  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
    $this->resetValidation();
  }

  public function addEmployer()
  {
    try {
      $this->validate();
      $password = $this->cin;
      $path = $this->photo ? $this->photo->store("Profile_Image") : "assets/img/logonull.jpg";
      $employer = Admin::create([
        'name' => $this->name,
        'prenom' => $this->prenom,
        'sexe' => $this->sexe,
        'dateNaissance' => $this->dateNaissance,
        'cin' => $this->cin,
        'adress' => $this->adress,
        'email' => $this->email,
        'tel' => $this->tel,
        'photo' => $path,
        'password' => bcrypt($password),
        'role' => $this->inputrole,
      ]);

      $this->resetInput();
      toastr()->success(" {{$this->inputrole}} a été ajouté avec succès");
      $this->Employers->prepend($employer);
      // $this->dispatchBrowserEvent('closeModal');
      $this->dispatch('close-modal');
    } catch (\Illuminate\Validation\ValidationException $e) {
      foreach ($e->errors() as $field => $messages) {
        foreach ($messages as $message) {
          toastr()->error($message);
        }
      }
    }
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
      if ($admin->photo) {
        Storage::delete($admin->photo);
      }
      $admin->delete();
      toastr()->success("admin supprimé avec succès");
    } else {
      toastr()->error('An error has occurred please try again later.');
    }
  }
}


