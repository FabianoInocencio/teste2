<?php

namespace App\Http\Controllers;

use App\Receber;
use Illuminate\Http\Request;
use Redirect;

class ReceberController extends Controller
{
    public function index()
  {

  	$Conta_receber = Receber::all();
  	//$res = (Treino::pluck('nome','id'));

    return view('Financeiro.listaReceber',['Conta_receber' => $Conta_receber]);

  }

   public function novo()
  {
  	return view('financeiro.Receber');
  }


public function salvar(Request $req)
  {
  	//dd($req->all ());
  $Conta_receber = new Receber();

$Conta_receber = Receber::create($req->all());
  // $resultado = Conta_receber::create([
  //'descricao' =>$req->descricao,
  //'favorecido' =>$req->favorecido,
  //'forma_pagamento' => $req->forma_pagamento,
  //'valor' => $req->valor,
  //'data_pagamento' => $req->data_pagamento,
  //'data_vencimento' => $req->data_vencimento,
//'situacao' => $req->situacao
//]);

 
   
   \Session::flash('mensagem_sucesso', 'Conta cadastrada com Sucesso!');

    return Redirect::to('receber/novo');

  	
  }


  public function pesquisar(Request $request) 
{
//echo "entrou no metodo";
	$Conta_receber = Receber::where("descricao", "like", "%".$request->get("descricao")."%")->get();
    
        // $clientes = Cliente::where("nome", "like", "%".$request->get("nome")."%")->get();
         //dd($cliente);

       // return view('clientes.lista', compact('clientes'));
       return view('Financeiro.listaReceber', ['Conta_receber' => $Conta_receber]);


      }

   public function editar($id)
    {
        
        $Conta_receber = Receber::findOrFail($id);

        return view('Financeiro.Receber', ['Conta_receber' => $Conta_receber]);
    }

    public function atualizar ($id, Request $request)
{
  $Conta_receber = Receber::findOrFail($id);

  $Conta_receber->update($request->all());
  \Session::flash('mensagem_sucesso', 'Conta atualizada com Sucesso!');

  return Redirect::to('receber/'.$Conta_receber->id.'/editar');
}

}
