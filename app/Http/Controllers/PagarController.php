<?php

namespace App\Http\Controllers;

use App\Conta_pagar;
use Illuminate\Http\Request;
use Redirect;

class PagarController extends Controller
{
    public function index()
  {
  	$res = (Conta_pagar::pluck('descricao','id'));

  	$Conta_pagar = Conta_pagar::all();

    return view('Financeiro.listaPagar', ['Conta_pagar' => $Conta_pagar], ['res'=> $res]);

  }

   public function novo()
  {
  	return view('financeiro.Pagar');
  }


public function salvar(Request $req)
  {
  	//dd($req->all ());
  $Conta_pagar = new Conta_pagar();

$Conta_pagar = Conta_pagar::create($req->all());
  // $resultado = Conta_pagar::create([
  //'descricao' =>$req->descricao,
  //'favorecido' =>$req->favorecido,
  //'forma_pagamento' => $req->forma_pagamento,
  //'valor' => $req->valor,
  //'data_pagamento' => $req->data_pagamento,
  //'data_vencimento' => $req->data_vencimento,
//'situacao' => $req->situacao
//]);

 
   
   \Session::flash('mensagem_sucesso', 'Conta cadastrada com Sucesso!');

    return Redirect::to('pagar/novo');

  	
  }


  public function pesquisar(Request $request) 
{
//echo "entrou no metodo";
 // dd($request->get("descricao"));

	


$Conta_pagar = Conta_pagar::where("descricao", "like", "%".$request->get("descricao")."%")->get();
    
        // $clientes = Cliente::where("nome", "like", "%".$request->get("nome")."%")->get();
         //dd($cliente);


       // return view('clientes.lista', compact('clientes'));
       return view('Financeiro.listaPagar', ['Conta_pagar' => $Conta_pagar]);

      }

   public function editar($id)
    {
        
        $Conta_pagar = Conta_pagar::findOrFail($id);

        return view('Financeiro.Pagar', ['Conta_pagar' => $Conta_pagar]);
    }

    public function atualizar ($id, Request $request)
{
  $Conta_pagar = Conta_pagar::findOrFail($id);

  $Conta_pagar->update($request->all());
  \Session::flash('mensagem_sucesso', 'Conta atualizada com Sucesso!');

  return Redirect::to('pagar/'.$Conta_pagar->id.'/editar');
}

  
}