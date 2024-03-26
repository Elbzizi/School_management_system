<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dash');


Route::prefix('admin')->name('admin.')->group(function () {
 // ghadi tdkhl lhna ghir ila knti admin
    Route::middleware('isadmin')->group(function () {
                Route::view('home', 'Admin.welcome')->name('home');  
        });               



        require __DIR__.'/admin_auth.php';

// o hna mat9drch tdkhl lihom ila knti connect as admin
});



