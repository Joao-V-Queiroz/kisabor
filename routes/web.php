<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//remderizar o login do filament
Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
