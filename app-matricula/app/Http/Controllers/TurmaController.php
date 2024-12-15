<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Professore;
use App\Models\Turma;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TurmaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $turmas = Turma::with(['curso', 'professor'])->paginate();

        return view('turma.index', compact('turmas'))
            ->with('i', ($request->input('page', 1) - 1) * $turmas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $turma = new Turma();
        $cursos = Curso::all();
        $professores = Professore::all();
        return view('turma.create', compact('turma', 'cursos', 'professores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TurmaRequest $request): RedirectResponse
    {

        Turma::create($request->validated());

        return Redirect::route('turmas.index')
            ->with('success', 'Turma created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $turma = Turma::find($id);

        return view('turma.show', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $turma = Turma::find($id);
        $cursos = Curso::find($turma->curso_id);
        $professores = Professore::find($turma->professor_id);

        return view('turma.edit', compact('turma', 'cursos', 'professores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TurmaRequest $request, Turma $turma): RedirectResponse
    {
        $turma->update($request->validated());

        return Redirect::route('turmas.index')
            ->with('success', 'Turma updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Turma::find($id)->delete();

        return Redirect::route('turmas.index')
            ->with('success', 'Turma deleted successfully');
    }

    public function gerarDadosTurma(Request $request): void {

        $ano = date('Y');
        $semestre = $request->semestre;

        $proximoNumero = Turma::where('ano', $ano)
                ->where('semestre', $semestre)
                ->where('curso_id', $cursoId)
                ->count() + 1;

        $nomeTurma = "T{$ano}{$semestre}-C{$cursoId}-{$proximoNumero}";

        Turma::create([
            'ano' => $ano,
            'semestre' => $semestre,
            'nome' => $nomeTurma,
        ]);

    }
}
