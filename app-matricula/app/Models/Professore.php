<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Professore
 *
 * @property $id
 * @property $nome
 * @property $sobrenome
 * @property $telefone
 * @property $email
 * @property $senha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Professore extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'sobrenome', 'telefone', 'email', 'senha'];

    public function turmas ()
    {
        return $this->hasMany(Turma::class);
    }



}
