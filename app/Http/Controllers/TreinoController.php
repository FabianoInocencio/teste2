<?php

namespace App\Http\Controllers;
use App\treino;

use Illuminate\Http\Request;
use Redirect;

class TreinoController extends Controller
{
    public function index()
  {

  	$treinos = Treino::all();
  	$res = (Treino::pluck('nome','id'));

    return view('treino.listaTreino', ['treinos' => $treinos], ['res'=> $res]);

  }

  public function salvar(Request $req)
  {
  	//dd($req->all ());
    $Treino = new Treino();

   //$resul = $Treino->create($request->all());

   $resultado = Treino::create([
 	'nome' =>$req->nome,
  'repeticoes' =>$req->repeticoes,
  'carga' => $req->carga,
  'intervalo' => $req->intervalo,
  'metodo' => $req->metodo,
  'exercicios_id' => $req->exercicios_id
//'situacao' => $req->situacao
]);

   \Session::flash('mensagem_sucesso', 'Treino cadastrado com Sucesso!');

    return Redirect::to('treino');

  	
  }

   public function novo()
  {
  	return view('treino.form');
  }





  public function pesquisar(Request $request) 
{
//echo "entrou no metodo";
	$treino = Treino::where("descricao", "like", "%".$request->get("descricao")."%")->get();
    
        // $clientes = Cliente::where("nome", "like", "%".$request->get("nome")."%")->get();
         //dd($cliente);

       // return view('clientes.lista', compact('clientes'));
       return view('treino.listaTreino', ['treino' => $treino]);


      }

   public function editar($id)
    {
        $res = (Treino::pluck('nome','id'));
        $treino = Treino::findOrFail($id);

        return view('treino.form', ['treino' => $treino], ['res' =>'$res']);
    }

    public function atualizar ($id, Request $request)
{
  $treino = Treino::findOrFail($id);

  $treino->update($request->all());
  \Session::flash('mensagem_sucesso', 'Treino atualizada com Sucesso!');

  return Redirect::to('treino/'.$treino->id.'/editar');
}
}
