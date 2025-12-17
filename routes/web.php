<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDashboard;

Route::get('/dashboard', [ControllerDashboard::class, 'index'])->name('dashboard');
   

Route::get('/gestionModule', function () {
    return view('gestionModule')->name('gestionModule');
});

Route::get('/importation', function () {
    return view('importation')->name('importation');
});