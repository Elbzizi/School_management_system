<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;

class ListEmployer extends Component
{
    public $Employers; 
    public $role;
    public $isAdd = true;

    public function mount(){
        $this->Employers = Admin::where('role','!=','directeur')->get();
    }
    public function render()
    {
        // dd($Employers);
        return view('livewire.admin.list-employer');
    }
    public function filter(){
        // dd($this->role);
        if ($this->role==='all') {
            $this->Employers = Admin::where('role','!=','directeur')->get();
        } else {
            // dd($this->role);
            $this->Employers = Admin::where('role',$this->role)->get();
        }
        
    }

}
