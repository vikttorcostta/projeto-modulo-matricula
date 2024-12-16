<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id
 * @property $data_matricula
 * @property $id_aluno
 * @property $id_turma
 * @property $created_at
 * @property $updated_at
 *
 * @property Aluno $aluno
 * @property Turma $turma
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['data_matricula', 'id_aluno', 'id_turma'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aluno()
    {
        return $this->belongsTo(\App\Models\Aluno::class, 'id_aluno', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turma()
    {
        return $this->belongsTo(\App\Models\Turma::class, 'id_turma', 'id');
    }
    
}
