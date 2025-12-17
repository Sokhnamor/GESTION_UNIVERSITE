
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GradeValidationController;

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'updatePassword'])->name('profile.update');
Route::get('/export', [ExportController::class, 'index'])->name('export');
Route::get('/grades-validation', [GradeValidationController::class, 'index'])->name('gradevalidation');
   





   

