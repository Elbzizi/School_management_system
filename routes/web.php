<?php

use App\Livewire\User\Absences;
use App\Livewire\User\Programme;
use App\Livewire\User\Test;
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
  Route::get('programme', Programme::class)->name('programme');
  Route::get('absences', Absences::class)->name('absences');
});

Route::get('/test', function () {
  return view('test.test1');
});
// page before login ========================
Route::get('/', function () {
  return view('fron-end.dashboard');
})->name('dash');
Route::get('/contact', function () {
  return view('fron-end.contact');
})->name('contact');
Route::get('/about', function () {
  return view('fron-end.about');
})->name('about');
Route::get('/privacy', function () {
  return view('fron-end.privacy');
})->name('privacy');
Route::get('/terms', function () {
  return view('fron-end.terms');
})->name('terms');
Route::get('/fAQs', function () {
  return view('fron-end.fAQs');
})->name('fAQs');
Route::get('/courses', function () {
  return view('fron-end.courses');
})->name('courses');
Route::get('/team', function () {
  return view('fron-end.team');
})->name('team');
Route::get('/testimonial', function () {
  return view('fron-end.testimonial');
})->name('testimonial');
Route::get('/404', function () {
  return view('fron-end.404');
})->name('404');
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
