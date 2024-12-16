<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MatriculaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $matriculas = Matricula::paginate();

        return view('matricula.index', compact('matriculas'))
            ->with('i', ($request->input('page', 1) - 1) * $matriculas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $matricula = new Matricula();

        return view('matricula.create', compact('matricula'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatriculaRequest $request): RedirectResponse
    {
        Matricula::create($request->validated());

        return Redirect::route('matriculas.index')
            ->with('success', 'Matricula created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $matricula = Matricula::find($id);

        return view('matricula.show', compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $matricula = Matricula::find($id);

        return view('matricula.edit', compact('matricula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatriculaRequest $request, Matricula $matricula): RedirectResponse
    {
        $matricula->update($request->validated());

        return Redirect::route('matriculas.index')
            ->with('success', 'Matricula updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Matricula::find($id)->delete();

        return Redirect::route('matriculas.index')
            ->with('success', 'Matricula deleted successfully');
    }
}
