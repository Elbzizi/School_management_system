<?php

use App\Livewire\Welcome;
use App\Livewire\user\Home;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('User.welcome');
// })->middleware(['auth', 'verified'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('profile/{id}', Profile::class)->name('profile');               
    Route::get('home', Home::class)->name('home'); 

});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
