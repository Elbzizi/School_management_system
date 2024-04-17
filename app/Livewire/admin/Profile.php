<?php

namespace App\Livewire\admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name;
    public $prenom;
    public $sexe;
    public $cin;
    public $photo;
    public $adress;
    public $role;
    public $statut;
    public $tel;
    public $email;
    public $created_at;
    public $updated_at;
    public $allstatuts = ['actif','inactif','bloque'];




    public function mount()
{
    if ($user = Auth::guard('admin')->check()) {
        $this->user = Auth::guard('admin')->user();
        $this->name = $this->user->name;
        $this->prenom = $this->user->prenom;
        $this->sexe = $this->user->sexe;
        $this->photo = $this->user->photo;
        $this->adress = $this->user->adress;
        $this->cin = $this->user->cin;
        $this->tel = $this->user->tel;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
        $this->statut = $this->user->statut;
        $this->created_at = $this->user->created_at;
        $this->updated_at = $this->user->updated_at;
    }
    else {

    $this->user = Auth::guard('web')->user();
    $this->name = $this->user->name;
    $this->prenom = $this->user->prenom;
    $this->sexe = $this->user->sexe;
    $this->photo = $this->user->photo;
    $this->adress = $this->user->adress;
    $this->cin = $this->user->cin;
    $this->tel = $this->user->tel;
    $this->email = $this->user->email;
    $this->role = $this->user->role;
    $this->statut = $this->user->statut;
    $this->created_at = $this->user->created_at;
    $this->updated_at = $this->user->updated_at;
    }

    
}
public function modifier(){
    if (Auth::guard('admin')->check()) {
        $user = Auth::guard('admin')->user();
    } else {
        $user = Auth::guard('web')->user();
    }
    $user->update([
        'name' => $this->name,
        'prenom' => $this->prenom,
        'sexe' => $this->sexe,
        'photo' => $this->photo,
        'adress' => $this->adress,
        'cin' => $this->cin,
        'tel' => $this->tel,
        'email' => $this->email,
        'role' => $this->role,
        'statut' => $this->statut,
    ]);
    session()->flash('message', 'Profile updated successfully.');
    // return redirect()->route('admin.profile');


}
    public function render()
    {
        return view('livewire.profile');
    }
}
