
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ControllerImportation;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ControllerGestionModule;
use App\Http\Controllers\GradeValidationController;
use App\Http\Controllers\connexion;
use App\Http\Controllers\inscription;



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.update');
route::get('/export', [ExportController::class, 'index'])->name('export');
Route::get('/grades-validation', [GradeValidationController::class, 'index'])->name('gradevalidation');


Route::get('/', [connexion::class, 'connect'])->name('connexion');
Route::get('/connexion', [connexion::class, 'connect'])->name('connexion');
Route::post('/connexion', [connexion::class, 'submit'])->name('connexion.submit');
Route::get('/inscription', [inscription::class, 'register'])->name('inscription');
Route::post('/inscription', [inscription::class, 'boutton'])->name('inscription.submit');



   

Route::get('/dashboard', [ControllerDashboard::class, 'board'])->name('dashboard');
Route::get('/gestionModule', [ControllerGestionModule::class, 'module']) ->name('gestionModule'); 
Route::get('/importation', [ControllerImportation::class, 'import']) ->name('importation'); 


   

