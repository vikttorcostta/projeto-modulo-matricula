<?php

namespace App\Models;

use App\Http\Requests\CursoRequest;
use App\Http\Requests\Icones\CursoIcones;
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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'descricao', 'carga_horaria', 'ativo'];


    public function turmas ()
    {
        return $this->hasMany(Turma::class);
    }
}
