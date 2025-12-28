
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
use App\Http\Controllers\appBar;
use App\Http\Controllers\ControllerEtudiant;
use App\Http\Controllers\ControllerJury;
use App\Http\Controllers\notes;
use App\Http\Controllers\jury;
use App\Http\Controllers\examen;
use App\Http\Controllers\scolarite;
use App\Http\Controllers\rapportjury;
use App\Http\Controllers\listeEtudiant;



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.update');
route::get('/export', [ExportController::class, 'index'])->name('export');
Route::get('/grades-validation', [GradeValidationController::class, 'index'])->name('gradevalidation');


Route::get('/', [connexion::class, 'connect'])->name('connexion');
Route::get('/connexion', [connexion::class, 'connect'])->name('connexion');
Route::post('/connexion', [connexion::class, 'submit'])->name('connexion.submit');
Route::get('/inscription', [inscription::class, 'register'])->name('inscription');
Route::post('/inscription', [inscription::class, 'boutton'])->name('inscription.submit');



Route::get('/etudiant', [ControllerEtudiant::class, 'create'])->name('etudiant');
Route::post('/etudiant', [ControllerEtudiant::class, 'store'])->name('etudiant.store');
//app-bar
Route::get('/bar-export', [appBar::class, 'export'])->name('bar-export');
Route::get('/bar-validation', [appBar::class, 'validation'])->name('bar-validation');
route::get('/notes', [notes::class, 'note'])->name('notes');
route::get('/jury', [ControllerJury::class, 'create'])->name('jury');
route::post('/jury', [ControllerJury::class, 'store'])->name('jury.store');
route::get('/examen', [examen::class, 'examen'])->name('examen');
route::get('/scolarite', [scolarite::class, 'scolarite'])->name('scolarite');
route::get('/rapport-jury', [rapportjury::class, 'rapport'])->name('rapport-jury');
route::get('/liste-etudiant', [listeEtudiant::class, 'liste'])->name('liste-etudiant');


   
//bassirou
Route::get('/dashboard', [ControllerDashboard::class, 'board'])->name('dashboard');
Route::get('/gestionModule', [ControllerGestionModule::class, 'module']) ->name('gestionModule'); 
Route::get('/importation', [ControllerImportation::class, 'import']) ->name('importation'); 


   

