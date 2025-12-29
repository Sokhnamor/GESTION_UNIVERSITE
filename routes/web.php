
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
use App\Http\Controllers\etudiant;
use App\Http\Controllers\appBar;
use App\Http\Controllers\notes;
use App\Http\Controllers\jury;
use App\Http\Controllers\examen;
use App\Http\Controllers\scolarite;
use App\Http\Controllers\rapportjury;
use App\Http\Controllers\listeEtudiant;
use App\Http\Controllers\pagesModule;




Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.update');
route::get('/export', [ExportController::class, 'index'])->name('export');
Route::get('/grades-validation', [GradeValidationController::class, 'index'])->name('gradevalidation');


Route::get('/', [connexion::class, 'connect'])->name('connexion');
Route::get('/connexion', [connexion::class, 'connect'])->name('connexion');
Route::post('/connexion', [connexion::class, 'submit'])->name('connexion.submit');
Route::get('/inscription', [inscription::class, 'register'])->name('inscription');
Route::post('/inscription', [inscription::class, 'boutton'])->name('inscription.submit');



Route::get('/etudiant', [etudiant::class, 'etu'])->name('etudiant');

//app-bar
Route::get('/bar-export', [appBar::class, 'export'])->name('bar-export');
Route::get('/bar-gestionModule', [appBar::class, 'gestionModule'])->name('bar-gestionModule');
route::get('/notes', [notes::class, 'note'])->name('notes');
route::get('/jury', [jury::class, 'jury'])->name('jury');
route::get('/examen', [examen::class, 'examen'])->name('examen');
route::get('/scolarite', [scolarite::class, 'scolarite'])->name('scolarite');
route::get('/rapport-jury', [rapportjury::class, 'rapport'])->name('rapport-jury');
route::get('/liste-etudiant', [listeEtudiant::class, 'liste'])->name('liste-etudiant');


//app-bar module
route::get('/filiere', [pagesModule::class, 'filiere'])->name('filiere');
route::get('/responsable', [pagesModule::class, 'responsable'])->name('responsable');
route::get('/semestre', [pagesModule::class, 'semestre'])->name('semestre');


   
//bassirou
Route::get('/dashboard', [ControllerDashboard::class, 'board'])->name('dashboard');
Route::get('/gestionModule', [ControllerGestionModule::class, 'module']) ->name('gestionModule'); 
Route::get('/importation', [ControllerImportation::class, 'import']) ->name('importation'); 


   

