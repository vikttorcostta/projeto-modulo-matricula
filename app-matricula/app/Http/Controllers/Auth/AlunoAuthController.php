<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AlunoAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'telefone' => 'string|max:15',
            'email' => 'required|string|email|max:255|unique:alunos',
            'senha' => 'required|string|min:8|confirmed',
        ]);

        $aluno = Aluno::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'data_nascimento' => $request->data_nascimento,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return response()->json(['message' => 'Aluno registrado com sucesso!']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string',
        ]);

        if (Auth::guard('aluno')->attempt(['email' => $request->email, 'senha' => $request->senha])) {
            return response()->json(['message' => 'Login realizado com sucesso']);
        }

        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }

    public function logout()
    {
        Auth::guard('aluno')->logout();
        return response()->json(['message' => 'Logout realizado com sucesso']);
    }
}
