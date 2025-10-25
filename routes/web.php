<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/timeline', \App\Livewire\Timeline::class)->name('timeline');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
});

Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');
