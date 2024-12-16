<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Aluno
 *
 * @property $id
 * @property $nome
 * @property $sobrenome
 * @property $data_nascimento
 * @property $telefone
 * @property $email
 * @property $senha
 * @property $sexo
 * @property $cpf
 * @property $rg
 * @property $id_responsavel
 * @property $id_acessibilidade
 * @property $id_endereco
 * @property $created_at
 * @property $updated_at
 *
 * @property Acessibilidade $acessibilidade
 * @property Endereco $endereco
 * @property Responsavei $responsavei
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aluno extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'alunos';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'data_nascimento',
        'telefone',
        'email',
        'senha',
        'sexo',
        'cpf',
        'rg',
        'id_responsavel',
        'id_acessibilidade',
        'id_endereco'
    ];

    protected $hidden = [
        'senha',
    ];

    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function acessibilidade()
    {
        return $this->belongsTo(\App\Models\Acessibilidade::class, 'id_acessibilidade', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function endereco()
    {
        return $this->belongsTo(\App\Models\Endereco::class, 'id_endereco', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsavei()
    {
        return $this->belongsTo(\App\Models\Responsavei::class, 'id_responsavel', 'id');
    }

}
