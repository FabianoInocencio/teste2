<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta_pagar extends Model
{
    
  protected $fillable = ['descricao', 'favorecido', 'forma_pagamento', 'valor', 'data_pagamento', 'data_vencimento', 'situacao'];


}