<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CursoController extends Controller
{

    public function index(Request $request): View
    {
        $cursos = Curso::paginate();

        return view('curso.index', compact('cursos'))
            ->with('i', ($request->input('page', 1) - 1) * $cursos->perPage());
    }


    public function create(): View
    {
        $curso = new Curso();

        return view('curso.create', compact('curso'));
    }


    public function store(CursoRequest $request): RedirectResponse
    {
        Curso::create($request->validated());

        return Redirect::route('cursos.index')
            ->with('success', 'Curso criado com sucesso!');
    }


    public function show($id): View
    {
        $curso = Curso::find($id);

        return view('curso.show', compact('curso'));
    }


    public function edit($id): View
    {
        $curso = Curso::find($id);

        return view('curso.edit', compact('curso'));
    }


    public function update(CursoRequest $request, Curso $curso): RedirectResponse
    {
        $curso->update($request->validated());

        return Redirect::route('cursos.index')
            ->with('success', 'Curso criado com sucesso.');
    }

    public function destroy($id): RedirectResponse
    {
        Curso::find($id)->delete();

        return Redirect::route('cursos.index')
            ->with('success', 'Curso excluido com sucesso.');
    }
}
