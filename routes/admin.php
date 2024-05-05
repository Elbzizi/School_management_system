<?php

// use App\Livewire\Profile;
// use App\Livewire\admin\Home;
// // use App\Livewire\CycleEtude;
// use App\Livewire\admin\CycleEtude;
use App\Livewire\Test;
use App\Livewire\Profile;
use App\Livewire\admin\Home;
use App\Livewire\Admin\Matier;
use App\Livewire\Admin\Groupee;
use App\Livewire\Admin\Groupes;
use App\Livewire\admin\CycleEtude;
use App\Livewire\Admin\ListEmployer;
use App\Livewire\Admin\ListEtudiant;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\DemandeInscription;

Route::get('/', function () {
    return view('dashboard');
})->name('dash');



Route::prefix('admin')->name('admin.')->group(function () {
 // ghadi tdkhl lhna ghir ila knti admin
    Route::middleware('isadmin')->group(function () {
                Route::get('home', Home::class)->name('home');
                Route::get('Cycles_etude', CycleEtude::class)->name('Cycles');
                Route::get('profile/{id}', Profile::class)->name('profile');
                Route::get('employer' , ListEmployer::class)->name('employer');
                Route::get('etudiant' , ListEtudiant::class)->name('etudiant');
                Route::get('etudiant/demandes' , DemandeInscription::class)->name('etudiant.demandes');
                Route::get('groupes',Groupes::class)->name('groupes');
                Route::get('groupe/{id}',Groupee::class)->name('groupe');
                Route::get('matier',Matier::class)->name('matier');
            });



        require __DIR__.'/admin_auth.php';
});





