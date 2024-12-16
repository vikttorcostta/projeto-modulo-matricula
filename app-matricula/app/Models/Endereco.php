<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Endereco
 *
 * @property $id
 * @property $logradouro
 * @property $numero
 * @property $bairro
 * @property $cep
 * @property $created_at
 * @property $updated_at
 *
 * @property Aluno[] $alunos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Endereco extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['logradouro', 'numero', 'bairro', 'cep'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos()
    {
        return $this->hasMany(\App\Models\Aluno::class, 'id', 'id_endereco');
    }
    
}
