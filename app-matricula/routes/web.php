<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // cursos
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/create/cursos', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/store/cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/edit/{id}/cursos', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::patch('/update/{id}/cursos', [CursoController::class, 'update'])->name('cursos.update');
    Route::delete('/destroy/{id}/cursos', [CursoController::class, 'destroy'])->name('cursos.destroy');
    Route::get('/show/{id}/cursos', [CursoController::class, 'show'])->name('cursos.show');

    // professores
    Route::get('/professores', [ProfessoreController::class, 'index'])->name('professores.index');
    Route::get('/create/professores', [ProfessoreController::class, 'create'])->name('professores.create');
    Route::post('/store/professores', [ProfessoreController::class, 'store'])->name('professores.store');
    Route::get('/edit/{id}/professores', [ProfessoreController::class, 'edit'])->name('professores.edit');
    Route::patch('/update/{id}/professores', [ProfessoreController::class, 'update'])->name('professores.update');
    Route::delete('/destroy/{id}/professores', [ProfessoreController::class, 'destroy'])->name('professores.destroy');
    Route::get('/show/{id}/professores', [ProfessoreController::class, 'show'])->name('professores.show');

});

require __DIR__.'/auth.php';
