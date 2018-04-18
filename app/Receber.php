<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receber extends Model
{
    protected $fillable = ['descricao',  'forma_recebimento', 'valor', 'data_recebimento', 'data_vencimento', 'situacao'];
}
