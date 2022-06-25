<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nome
 * @property $representante_id
 * @property $email
 * @property $cep
 * @property $endereco
 * @property $logradouro
 * @property $numero
 * @property $bairro
 * @property $cidade
 * @property $estado
 * @property $complemento
 * @property $created_at
 * @property $updated_at
 *
 * @property Representante $representante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'representante_id' => 'required',
		'email' => 'required',
		'cep' => 'required',
		'endereco' => 'required',
		'logradouro' => 'required',
		'numero' => 'required',
		'bairro' => 'required',
		'cidade' => 'required',
		'estado' => 'required',
		'complemento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','representante_id','email','cep','endereco','logradouro','numero','bairro','cidade','estado','complemento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function representante()
    {
        return $this->hasOne('App\Models\Representante', 'id', 'representante_id');
    }
    

}
