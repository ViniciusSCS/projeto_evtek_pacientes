<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'cpf',
        'nome',
        'rg',
        'cartao_sus',
        'sexo',
        'data_nascimento',
        'nome_mae',
        'telefone',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
    
    ];
    
    
    protected $dates = [
        'data_nascimento',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/pacientes/'.$this->getKey());
    }
}
