<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acessibilidade
 *
 * @property $id
 * @property $nome
 * @property $tipo
 * @property $descricao
 * @property $prioridade
 * @property $created_at
 * @property $updated_at
 *
 * @property Aluno[] $alunos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Acessibilidade extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'tipo', 'descricao', 'prioridade'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos()
    {
        return $this->hasMany(\App\Models\Aluno::class, 'id', 'id_acessibilidade');
    }
    
}
