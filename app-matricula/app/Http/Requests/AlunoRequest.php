<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nome' => 'required|string',
			'sobrenome' => 'required|string',
			'data_nascimento' => 'required',
			'telefone' => 'required|string',
			'email' => 'required|string',
			'senha' => 'required|string',
			'sexo' => 'required|string',
			'cpf' => 'required|string',
			'rg' => 'required|string',
			'id_responsavel' => 'required',
			'id_acessibilidade' => 'required',
			'id_endereco' => 'required',
        ];
    }
}
