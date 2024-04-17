<?php

// use App\Livewire\Profile;
// use App\Livewire\admin\Home;
// // use App\Livewire\CycleEtude;
// use App\Livewire\admin\CycleEtude;
use App\Livewire\admin\Home;
use App\Livewire\admin\Profile;
use App\Livewire\admin\CycleEtude;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('dashboard');
})->name('dash');


Route::prefix('admin')->name('admin.')->group(function () {
 // ghadi tdkhl lhna ghir ila knti admin
    Route::middleware('isadmin')->group(function () {
                Route::get('home', Home::class)->name('home'); 
                Route::get('Cycles_etude', CycleEtude::class)->name('Cycles');               
                Route::get('Profile', Profile::class)->name('profile');               
            });               



        require __DIR__.'/admin_auth.php';

// o hna mat9drch tdkhl lihom ila knti connect as admin
});





