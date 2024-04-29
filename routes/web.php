<?php

use App\Http\Controllers\HomeController;
use App\Livewire\HomeLivewire;
use Illuminate\Support\Facades\Route;

// Route::get('/', HomeLivewire::class)->name('home');

Route::get('/', function () {
    return view('home_page');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//remderizar o login do filament
Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
