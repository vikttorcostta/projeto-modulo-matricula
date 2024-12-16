<?php

namespace App\Http\Controllers;

use App\Models\Responsavei;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ResponsaveiRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ResponsaveiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $responsaveis = Responsavei::paginate();

        return view('responsavei.index', compact('responsaveis'))
            ->with('i', ($request->input('page', 1) - 1) * $responsaveis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $responsavei = new Responsavei();

        return view('responsavei.create', compact('responsavei'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponsaveiRequest $request): RedirectResponse
    {
        Responsavei::create($request->validated());

        return Redirect::route('responsaveis.index')
            ->with('success', 'Responsavei created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $responsavei = Responsavei::find($id);

        return view('responsavei.show', compact('responsavei'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $responsavei = Responsavei::find($id);

        return view('responsavei.edit', compact('responsavei'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponsaveiRequest $request, Responsavei $responsavei): RedirectResponse
    {
        $responsavei->update($request->validated());

        return Redirect::route('responsaveis.index')
            ->with('success', 'Responsavei updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Responsavei::find($id)->delete();

        return Redirect::route('responsaveis.index')
            ->with('success', 'Responsavei deleted successfully');
    }
}
