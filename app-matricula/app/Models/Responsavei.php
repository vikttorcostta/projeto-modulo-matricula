<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Responsavei
 *
 * @property $id
 * @property $nome
 * @property $sobrenome
 * @property $parentesco
 * @property $email
 * @property $telefone
 * @property $cpf
 * @property $rg
 * @property $created_at
 * @property $updated_at
 *
 * @property Aluno[] $alunos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Responsavei extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'sobrenome', 'parentesco', 'email', 'telefone', 'cpf', 'rg'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos()
    {
        return $this->hasMany(\App\Models\Aluno::class, 'id', 'id_responsavel');
    }
    
}
