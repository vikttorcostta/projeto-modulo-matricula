<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EnderecoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $enderecos = Endereco::paginate();

        return view('endereco.index', compact('enderecos'))
            ->with('i', ($request->input('page', 1) - 1) * $enderecos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $endereco = new Endereco();

        return view('endereco.create', compact('endereco'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnderecoRequest $request): RedirectResponse
    {
        Endereco::create($request->validated());

        return Redirect::route('enderecos.index')
            ->with('success', 'Endereco created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $endereco = Endereco::find($id);

        return view('endereco.show', compact('endereco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $endereco = Endereco::find($id);

        return view('endereco.edit', compact('endereco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnderecoRequest $request, Endereco $endereco): RedirectResponse
    {
        $endereco->update($request->validated());

        return Redirect::route('enderecos.index')
            ->with('success', 'Endereco updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Endereco::find($id)->delete();

        return Redirect::route('enderecos.index')
            ->with('success', 'Endereco deleted successfully');
    }
}
