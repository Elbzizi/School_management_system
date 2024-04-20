<?php

namespace App\Livewire;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $info;
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
    public $allstatuts = ['active', 'desactive','bloque'];
    public $allsexe = ['homme','femme'];
    public function mount($id){
    
        if ($user = Auth::guard('admin')->check()) {
            $this->info = Admin::find($id);
            $this->name = $this->info->name;
            $this->prenom = $this->info->prenom;
            $this->sexe = $this->info->sexe;
            $this->photo = $this->info->photo;
            $this->adress = $this->info->adress;
            $this->cin = $this->info->cin;
            $this->tel = $this->info->tel;
            $this->email = $this->info->email;
            $this->role = $this->info->role;
            $this->statut = $this->info->statut;
            $this->created_at = $this->info->created_at;
            $this->updated_at = $this->info->updated_at;
        }
        else{
            $this->info = Auth::guard('web')->user();
            $this->name = $this->info->name;
            $this->prenom = $this->info->prenom;
            $this->sexe = $this->info->sexe;
            $this->photo = $this->info->photo;
            $this->adress = $this->info->adress;
            $this->cin = $this->info->cin;
            $this->tel = $this->info->tel;
            $this->email = $this->info->email;
            $this->role = $this->info->role;
            $this->statut = $this->info->statut;
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
        return view('livewire.include.profile');
    }
}
