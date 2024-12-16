<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
class Professore extends Authenticatable
{

    use Notifiable;

    protected $table = 'professores';

    protected $fillable = [
        'nome', 'sobrenome', 'email', 'senha',
    ];

    protected $hidden = [
        'senha',
    ];

    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    public function turmas ()
    {
        return $this->hasMany(Turma::class);
    }



}
