<?php

// use App\Livewire\Profile;
// use App\Livewire\admin\Home;
// // use App\Livewire\CycleEtude;
// use App\Livewire\admin\CycleEtude;
use App\Livewire\Profile;
use App\Livewire\admin\Home;
use App\Livewire\admin\CycleEtude;
use App\Livewire\Admin\ListEmployer;
use Illuminate\Support\Facades\Route;

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
            });               



        require __DIR__.'/admin_auth.php';
});





