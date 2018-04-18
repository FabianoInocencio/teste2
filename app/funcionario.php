<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
     protected $fillable = ['nome', 'sexo', 'nascimento', 'cpf', 'rg', 'orgao_espedidor', 'uf', 'telefone', 'endereco', 'complemento', 'numero','cidade', 'cep', 'estado', 'email', 'foto', 'situacao', 'cargo'];
}
