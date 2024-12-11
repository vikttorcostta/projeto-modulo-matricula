<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // cursos
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/store', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/edit/{id}', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::patch('/update/{id}', [CursoController::class, 'update'])->name('cursos.update');
    Route::delete('/destroy/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');
    Route::get('/show/{id}', [CursoController::class, 'show'])->name('cursos.show');

});

require __DIR__.'/auth.php';
