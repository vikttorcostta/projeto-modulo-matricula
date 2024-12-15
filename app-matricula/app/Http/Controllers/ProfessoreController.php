<?php

namespace App\Http\Controllers;

use App\Models\Professore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfessoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $professores = Professore::paginate();

        return view('professore.index', compact('professores'))
            ->with('i', ($request->input('page', 1) - 1) * $professores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $professore = new Professore();

        return view('professore.create', compact('professore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessoreRequest $request): RedirectResponse
    {
        Professore::create($request->validated());

        return Redirect::route('professores.index')
            ->with('success', 'Professore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $professore = Professore::find($id);

        return view('professore.show', compact('professore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $professore = Professore::find($id);

        return view('professore.edit', compact('professore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessoreRequest $request, Professore $professore): RedirectResponse
    {
        $professore->update($request->validated());

        return Redirect::route('professores.index')
            ->with('success', 'Professore updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Professore::find($id)->delete();

        return Redirect::route('professores.index')
            ->with('success', 'Professore deleted successfully');
    }
}
