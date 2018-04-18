<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Redirect;

class ClienteController extends Controller
{
    public function index()
  {

     //return $this->pesquisar();
   $clientes = Cliente::get();

    return view('clientes.lista', ['clientes' => $clientes]);
  }

  public function novo()
  {
  	return view('clientes.formulario');
  }
  public function post(Request $req){
    //dd($req->motivo);
    //dd($request->treino);
    //dd($request->doenca);
    $cliente = new Cliente();

   $cliente->nome = $req->nome;
   $cliente->sexo = $req->sexo;
   $cliente->nascimento = $req->nascimento;
   $cliente->cpf = $req->cpf;
   $cliente->rg = $req->rg;
   $cliente->orgao_espedidor = $req->orgao_espedidor;
   $cliente->uf = $req->uf;
   $cliente->telefone = $req->telefone;
   $cliente->endereco = $req->endereco;
   $cliente->complemento = $req->complemento;
   $cliente->numero = $req->numero;
   $cliente->cidade = $req->cidade;
   $cliente->cep = $req->cep;
   $cliente->estado = $req->estado;
   $cliente->email = $req->email;
   $cliente->foto = $req->foto;
   $cliente->situacao = $req->situacao;
   
   $cliente->motivo = implode(",",$req->motivo);
   $cliente->treino = implode(",",$req->treino);
$cliente->doenca = implode(",",$req->doenca);
//$cliente = $cliente->create($req->all());
$cliente->save();
//print " $cliente";


  }

  public function salvar(Request $req)
  {
    
    //$cliente = new Cliente();

   //$cliente = $cliente->create($request->all());

    $cliente = new Cliente();

   $cliente->nome = $req->nome;
   $cliente->sexo = $req->sexo;
   $cliente->nascimento = $req->nascimento;
   $cliente->cpf = $req->cpf;
   $cliente->rg = $req->rg;
   $cliente->orgao_espedidor = $req->orgao_espedidor;
   $cliente->uf = $req->uf;
   $cliente->telefone = $req->telefone;
   $cliente->endereco = $req->endereco;
   $cliente->complemento = $req->complemento;
   $cliente->numero = $req->numero;
   $cliente->cidade = $req->cidade;
   $cliente->cep = $req->cep;
   $cliente->estado = $req->estado;
   $cliente->email = $req->email;
   $cliente->foto = $req->foto;
   $cliente->situacao = $req->situacao;
   
   $cliente->motivo = implode(",",$req->motivo);
   $cliente->treino = implode(",",$req->treino);
$cliente->doenca = implode(",",$req->doenca);
//$cliente = $cliente->create($req->all());

$cliente->save();

//$motivo = $cliente->motivo;

   \Session::flash('mensagem_sucesso', 'Cliente cadastrado com Sucesso!');

return Redirect::to('clientes/novo');

  	
  }
  public function pesquisar(Request $request) 
{
//echo "entrou no metodo";
    
         $clientes = Cliente::where("nome", "like", "%".$request->get("nome")."%")->get();
         //dd($cliente);

       // return view('clientes.lista', compact('clientes'));
        return view('clientes.lista', ['clientes' => $clientes]);

//$cliente= Cliente::where('nome', 'LIKE', '%'.$request.'%');
          //$cliente = DB::table('clientes')
                        //->leftJoin('pessoas', 'pac.id_pessoa', '=', 'pessoas.id')
                        //->select('nome')
                        //->where($data['tipo_busca'], 'ilike', $data['busca'] . '%')
                       // ->orderby('nome');
                        
                      

                         //$title = "Listagem de clientes";
   //$clientes = $busca;
    //return view('clientes.lista')
        //->withErrors($validator);

        //->with('clientes', $cliente);
      }

  


public function editar($id)
{
  $cliente = Cliente::findOrFail($id);
  $getId = $id;
  //$motivo = [];
  $finds = Cliente::whereId($id)->first();
  //foreach ($finds as $find) {
    //array_push($motivo, $find->motivo);
  //}
  $motivo =explode(",", $finds->motivo);

  return view('clientes.formulario',compact('cliente','motivo'));
}

public function atualizar ($id, Request $request)
{
  $cliente = Cliente::findOrFail($id);

  $cliente->update($request->all());
  \Session::flash('mensagem_sucesso', 'Cliente atualizado com Sucesso!');

  return Redirect::to('clientes/'.$cliente->id.'/editar');
}

public function excluir($id) 
{
//echo "entrou no metodo";
    

    //$finds = Cliente::whereId($id)->first();
         //$clientes = Cliente::where("nome", "like", "%".$request->get("nome")."%")->get();
         //dd($cliente);

       // return view('clientes.lista', compact('clientes'));
        //return view('clientes.lista', ['clientes' => $clientes]);

//$cliente= Cliente::where('nome', 'LIKE', '%'.$request.'%');
          //$cliente = DB::table('clientes')
                        //->leftJoin('pessoas', 'pac.id_pessoa', '=', 'pessoas.id')
                        //->select('nome')
                        //->where($data['tipo_busca'], 'ilike', $data['busca'] . '%')
                       // ->orderby('nome');
                        
                      

                         //$title = "Listagem de clientes";
   //$clientes = $busca;
    //return view('clientes.lista')
        //->withErrors($validator);

        //->with('clientes', $cliente);
      }

}
