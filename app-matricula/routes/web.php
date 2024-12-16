<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessoreController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ResponsaveiController;
use App\Http\Controllers\AcessibilidadeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Acessibilidade;
use App\Models\Endereco;
use App\Models\Matricula;
use App\Models\Professore;
use App\Models\Responsavei;
use App\Models\Curso;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $turma = Turma::all();
    $totalTurmas = Turma::count();

    $aluno = Aluno::all();
    $totalAlunos = Aluno::count();

    $acessibilidade = Acessibilidade::all();
    $totalAcessibilidades = Acessibilidade::count();

    $matricula = Matricula::all();
    $totalMatriculas = Matricula::count();

    $endereco = Endereco::all();
    $totalEnderecos = Endereco::count();

    $professor = Professore::all();
    $totalProfessores = Professore::count();

    $responsavel = Responsavei::all();
    $totalResponsaveis = Responsavei::count();

    $curso = Curso::all();
    $totalCursos = Curso::count();

    return view('dashboard', compact(
            [
                'turma',
                'aluno',
                'acessibilidade',
                'matricula',
                'endereco',
                'professor',
                'responsavel',
                'curso'
            ],
            [
                'totalAlunos',
                'totalTurmas',
                'totalAcessibilidades',
                'totalMatriculas',
                'totalEnderecos',
                'totalProfessores',
                'totalResponsaveis',
                'totalCursos'
            ],
       )
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // cursos
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::patch('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

    // professores
    Route::get('/professores', [ProfessoreController::class, 'index'])->name('professores.index');
    Route::get('/professores/create', [ProfessoreController::class, 'create'])->name('professores.create');
    Route::post('/professores', [ProfessoreController::class, 'store'])->name('professores.store');
    Route::get('/professores/{professor}', [ProfessoreController::class, 'show'])->name('professores.show');
    Route::get('/professores/{professor}/edit', [ProfessoreController::class, 'edit'])->name('professores.edit');
    Route::patch('/professores/{professor}', [ProfessoreController::class, 'update'])->name('professores.update');
    Route::delete('/professores/{professor}', [ProfessoreController::class, 'destroy'])->name('professores.destroy');

    // turmas
    Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
    Route::get('/turmas/create', [TurmaController::class, 'create'])->name('turmas.create');
    Route::post('/turmas', [TurmaController::class, 'store'])->name('turmas.store');
    Route::get('/turmas/{turma}', [TurmaController::class, 'show'])->name('turmas.show');
    Route::get('/turmas/{turma}/edit', [TurmaController::class, 'edit'])->name('turmas.edit');
    Route::patch('/turmas/{turma}', [TurmaController::class, 'update'])->name('turmas.update');
    Route::delete('/turmas/{turma}', [TurmaController::class, 'destroy'])->name('turmas.destroy');


    // endereços
    Route::get('/enderecos', [EnderecoController::class, 'index'])->name('enderecos.index');
    Route::get('/enderecos/create', [EnderecoController::class, 'create'])->name('enderecos.create');
    Route::post('/enderecos', [EnderecoController::class, 'store'])->name('enderecos.store');
    Route::get('/enderecos/{endereco}', [EnderecoController::class, 'show'])->name('enderecos.show');
    Route::get('/enderecos/{endereco}/edit', [EnderecoController::class, 'edit'])->name('enderecos.edit');
    Route::patch('/enderecos/{endereco}', [EnderecoController::class, 'update'])->name('enderecos.update');
    Route::delete('/enderecos/{endereco}', [EnderecoController::class, 'destroy'])->name('enderecos.destroy');

    // responsaveis
    Route::get('/responsaveis', [ResponsaveiController::class, 'index'])->name('responsaveis.index');
    Route::get('/responsaveis/create', [ResponsaveiController::class, 'create'])->name('responsaveis.create');
    Route::post('/responsaveis', [ResponsaveiController::class, 'store'])->name('responsaveis.store');
    Route::get('/responsaveis/{responsavel}', [ResponsaveiController::class, 'show'])->name('responsaveis.show');
    Route::get('/responsaveis/{responsavel}/edit', [ResponsaveiController::class, 'edit'])->name('responsaveis.edit');
    Route::patch('/responsaveis/{responsavel}', [ResponsaveiController::class, 'update'])->name('responsaveis.update');
    Route::delete('/responsaveis/{responsavel}', [ResponsaveiController::class, 'destroy'])->name('responsaveis.destroy');

    // acessibilidades
    Route::get('/acessibilidades', [AcessibilidadeController::class, 'index'])->name('acessibilidades.index');
    Route::get('/acessibilidades/create', [AcessibilidadeController::class, 'create'])->name('acessibilidades.create');
    Route::post('/acessibilidades', [AcessibilidadeController::class, 'store'])->name('acessibilidades.store');
    Route::get('/acessibilidades/{acessibilidade}', [AcessibilidadeController::class, 'show'])->name('acessibilidades.show');
    Route::get('/acessibilidades/{acessibilidade}/edit', [AcessibilidadeController::class, 'edit'])->name('acessibilidades.edit');
    Route::patch('/acessibilidades/{acessibilidade}', [AcessibilidadeController::class, 'update'])->name('acessibilidades.update');
    Route::delete('/acessibilidades/{acessibilidade}', [AcessibilidadeController::class, 'destroy'])->name('acessibilidades.destroy');

    // matriculas
    Route::get('/matriculas', [MatriculaController::class, 'index'])->name('matriculas.index');
    Route::get('/matriculas/create', [MatriculaController::class, 'create'])->name('matriculas.create');
    Route::post('/matriculas', [MatriculaController::class, 'store'])->name('matriculas.store');
    Route::get('/matriculas/{matricula}', [MatriculaController::class, 'show'])->name('matriculas.show');
    Route::get('/matriculas/{matricula}/edit', [MatriculaController::class, 'edit'])->name('matriculas.edit');
    Route::patch('/matriculas/{matricula}', [MatriculaController::class, 'update'])->name('matriculas.update');
    Route::delete('/matriculas/{matricula}', [MatriculaController::class, 'destroy'])->name('matriculas.destroy');

    // alunos
    Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
    Route::get('/alunos/{acessibilidade}', [AlunoController::class, 'show'])->name('alunos.show');
    Route::get('/alunos/{acessibilidade}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::patch('/alunos/{acessibilidade}', [AlunoController::class, 'update'])->name('alunos.update');
    Route::delete('/alunos/{acessibilidade}', [AlunoController::class, 'destroy'])->name('alunos.destroy');

});

require __DIR__.'/auth.php';
