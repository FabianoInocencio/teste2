<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Cliente_Motivo extends Model
{
   protected $fillable = ['motivo', 'treino', 'doenca'];



public function Cliente()
{
	return $this->hasMany(Cliente::class);
}


}