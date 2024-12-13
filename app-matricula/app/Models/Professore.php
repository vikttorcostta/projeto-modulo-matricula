<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

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


}
