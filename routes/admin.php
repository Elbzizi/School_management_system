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
use App\Livewire\Admin\Matiers;
use App\Livewire\Admin\Niveaux;
use App\Livewire\admin\CycleEtude;
use App\Livewire\Admin\ListEmployer;
use App\Livewire\Admin\ListEtudiant;
use Illuminate\Support\Facades\Route;


use App\Livewire\Admin\DemandeInscription;



Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('isadmin')->group(function () {
                Route::get('home', Home::class)->name('home');
                Route::get('Cycles_etude', CycleEtude::class)->name('Cycles');
                Route::get('niveau/{id}', Niveaux::class)->name('niveaux');
                Route::get('groupes',Groupes::class)->name('groupes');
                Route::get('groupe/{id}',Groupee::class)->name('groupe');
                Route::get('matiers',Matiers::class)->name('matiers');
                Route::get('employer' , ListEmployer::class)->name('employer');
                Route::get('etudiant' , ListEtudiant::class)->name('etudiant');
                Route::get('etudiant/demandes' , DemandeInscription::class)->name('etudiant.demandes');
                Route::get('profile/{id}', Profile::class)->name('profile');
                Route::get('/generate-pdf', Groupee::class)->name('generate-pdf');

            });



        require __DIR__.'/admin_auth.php';
});





