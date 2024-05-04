<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $info;
    public $etudiant;
    public $id, $name, $prenom, $sexe, $photo, $adress, $cin, $tel, $email, $role, $statut, $created_at, $updated_at , $groupe;
    public $route;
    public $allstatuts = ['active', 'desactive','bloque'];
    public $allsexe = ['homme','femme'];
    public function render()
    {

        return view('livewire.include.profile');
    }
    public function mount($id){
        $this->route = url()->previous();
        $type = request()->query('type');
        // ila kan l auth admin
        if ($user = Auth::guard('admin')->check()) {
            // ila kan type dyal l user etudiant -> afficher les information dyal l etudiant
            if($type==='etudiant'){
                //etudiant
                $this->etudiant = User::find($id);
                $this->id = $this->etudiant->id;
                $this->name = $this->etudiant->name;
                $this->prenom = $this->etudiant->prenom;
                $this->sexe = $this->etudiant->sexe;
                $this->photo = $this->etudiant->photo;
                $this->adress = $this->etudiant->adress;
                $this->cin = $this->etudiant->cin;
                $this->tel = $this->etudiant->tel;
                $this->email = $this->etudiant->email;
                $this->role = $this->etudiant->role;
                $this->statut = $this->etudiant->statut;
                $this->created_at = $this->etudiant->created_at;
                $this->updated_at = $this->etudiant->updated_at;
                $this->groupe = $this->etudiant->groupe;

            }
            else{
                // afficher dyal admin
                // $this->info = Admin::with('matiers.groupes')->find($id);
                $this->info = Admin::find($id);
                $this->id = $this->info->id;
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
        }
        // ila makanch auth admin donc aykon user afficher lih les info dyalo
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


public function modifier($id){
    if($user = Auth::guard('admin')->check()){
        if($this->role==='etudiant'){
                $id=$id;
                $newuser = User::find($id);
                // dd($this->statut);
                $newuser->update([
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
        }
        else{
            $id=$id;
            $newuser = Admin::find($id);
            $newuser->update([
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

        }

    };
    session()->flash('message', 'Profile updated successfully.');




}
}
