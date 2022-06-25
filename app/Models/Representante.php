<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Representante
 *
 * @property $id
 * @property $nome
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Representante extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'representante_id', 'id');
    }
    

}
