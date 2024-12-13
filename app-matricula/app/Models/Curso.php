<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nome
 * @property $descricao
 * @property $carga_horaria
 * @property $ativo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{

    protected $perPage = 20;

    /**
     *
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'descricao', 'carga_horaria', 'ativo'];


}
