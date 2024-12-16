<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AcessibilidadeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AcessibilidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $acessibilidades = Acessibilidade::paginate();

        return view('acessibilidade.index', compact('acessibilidades'))
            ->with('i', ($request->input('page', 1) - 1) * $acessibilidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $acessibilidade = new Acessibilidade();

        return view('acessibilidade.create', compact('acessibilidade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcessibilidadeRequest $request): RedirectResponse
    {
        Acessibilidade::create($request->validated());

        return Redirect::route('acessibilidades.index')
            ->with('success', 'Acessibilidade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $acessibilidade = Acessibilidade::find($id);

        return view('acessibilidade.show', compact('acessibilidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $acessibilidade = Acessibilidade::find($id);

        return view('acessibilidade.edit', compact('acessibilidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcessibilidadeRequest $request, Acessibilidade $acessibilidade): RedirectResponse
    {
        $acessibilidade->update($request->validated());

        return Redirect::route('acessibilidades.index')
            ->with('success', 'Acessibilidade updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Acessibilidade::find($id)->delete();

        return Redirect::route('acessibilidades.index')
            ->with('success', 'Acessibilidade deleted successfully');
    }
}
