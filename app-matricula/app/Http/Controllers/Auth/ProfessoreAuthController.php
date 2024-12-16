<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfessoreAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255|unique:professores',
            'senha' => 'required|string|min:8|confirmed',
        ]);

        $professor = Professore::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return response()->json(['message' => 'Professor registrado com sucesso!']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string',
        ]);

        if (Auth::guard('professor')->attempt(['email' => $request->email, 'senha' => $request->senha])) {
            return response()->json(['message' => 'Login realizado com sucesso']);
        }

        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }

    public function logout()
    {
        Auth::guard('professor')->logout();
        return response()->json(['message' => 'Logout realizado com sucesso']);
    }
}
