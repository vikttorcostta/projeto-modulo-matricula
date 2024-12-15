<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professore;
use App\Models\Curso;

/**
 * Class Turma
 *
 * @property $id
 * @property $nome
 * @property $ano
 * @property $semestre
 * @property $created_at
 * @property $updated_at
 * @property $id_curso
 * @property $id_professor
 *
 * @property Curso $curso
 * @property Professore $professore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Turma extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nome', 'ano', 'semestre', 'vagas', 'id_curso', 'id_professor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function professor()
    {
        return $this->belongsTo(Professore::class, 'id_professor', 'id');
    }

}
