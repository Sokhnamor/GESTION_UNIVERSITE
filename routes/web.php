
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ControllerImportation;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ControllerGestionModule;
use App\Http\Controllers\GradeValidationController;


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.update');
route::get('/export', [ExportController::class, 'index'])->name('export');
Route::get('/grades-validation', [GradeValidationController::class, 'index'])->name('gradevalidation');
   

Route::get('/dashboard', [ControllerDashboard::class, 'mor'])->name('dashboard');
Route::get('/gestionModule', [ControllerGestionModule::class, 'diop']) ->name('gestionModule'); 
Route::get('/importation', [ControllerImportation::class, 'bass']) ->name('importation'); 


   

