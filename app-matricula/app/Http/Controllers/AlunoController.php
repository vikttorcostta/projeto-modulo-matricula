<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $alunos = Aluno::paginate();

        return view('aluno.index', compact('alunos'))
            ->with('i', ($request->input('page', 1) - 1) * $alunos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $aluno = new Aluno();

        return view('aluno.create', compact('aluno'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlunoRequest $request): RedirectResponse
    {
        Aluno::create($request->validated());

        return Redirect::route('alunos.index')
            ->with('success', 'Aluno created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $aluno = Aluno::find($id);

        return view('aluno.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $aluno = Aluno::find($id);

        return view('aluno.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlunoRequest $request, Aluno $aluno): RedirectResponse
    {
        $aluno->update($request->validated());

        return Redirect::route('alunos.index')
            ->with('success', 'Aluno updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Aluno::find($id)->delete();

        return Redirect::route('alunos.index')
            ->with('success', 'Aluno deleted successfully');
    }
}
