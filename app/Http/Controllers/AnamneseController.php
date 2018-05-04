<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Cliente_Motivo;
use Redirect;

class AnamneseController extends Controller {

    public function index() {

//$id=DB::Query('SELECT LAST_INSERT_ID()');
//$id = DB::connection('mysql')->pdo->lastInsertId();
//$id = Cliente::get()->id;
//$id = Request::input(‘id’);
//   

        return view('clientes.Anamnese');
    }

    public function salvar() {

        $Motivos = new Cliente_Motivo();
        $Motivos->motivo = implode(",", $cliente->id);
        $Motivos->motivo = implode(",", $req->motivo);
        $Motivos->treino = implode(",", $req->treino);
        $Motivos->doenca = implode(",", $req->doenca);

        $Motivos->save();
    }

    public function teste()
    {
    	$cliente = Cliente::where('nome','teste')->get()->first();
    	echo $cliente->nome;

    	//$clientes = $Cliente_Motivo->cliente;

    	//foreach ($clientes as $cliente) {
    	//	echo "<hr>{$cliente->nome}";
    	//}
    }

}
