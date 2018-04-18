<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
  protected $fillable = ['nome', 'sexo', 'nascimento', 'cpf', 'rg', 'orgao_espedidor', 'uf', 'telefone', 'endereco', 'complemento','numero', 'cidade', 'cep', 'estado', 'email', 'foto', 'situacao', 'motivo', 'treino', 'doenca'];


}


 //function pesquisar(Array $data){
	//$dado= $this->where(function($query) use ($data){
	//	if (isset($data['nome'])) {
		//	$query->where('nome', $data['nome']);
		//}
//	})->toSql();dd($dado);
	//->paginate();
//}

