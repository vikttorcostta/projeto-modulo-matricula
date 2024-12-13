<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

namespace App\Http\Controllers;

use App\Models\Professore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfessoreController extends Controller
{

    public function index(Request $request): View
    {
        $professores = Professore::paginate();

        return view('professore.index', compact('professores'))
            ->with('i', ($request->input('page', 1) - 1) * $professores->perPage());
    }

    public function create(): View
    {
        $professore = new Professore();

        return view('professore.create', compact('professore'));
    }

    public function store(ProfessoreRequest $request): RedirectResponse
    {
        Professore::create($request->validated());

        return Redirect::route('professores.index')
            ->with('success', 'Professore created successfully.');
    }

    public function show($id): View
    {
        $professore = Professore::find($id);

        return view('professore.show', compact('professore'));
    }


    public function edit($id): View
    {
        $professore = Professore::find($id);

        return view('professore.edit', compact('professore'));
    }

    public function update(ProfessoreRequest $request, Professore $professore): RedirectResponse
    {
        $professore->update($request->validated());

        return Redirect::route('professores.index')
            ->with('success', 'Professor editado com sucesso.');
    }

    public function destroy($id): RedirectResponse
    {
        Professore::find($id)->delete();

        return Redirect::route('professores.index')
            ->with('success', 'Professor excluido com sucesso.');
    }
}
