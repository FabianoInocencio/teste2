<?php

namespace App\Http\Controllers;

use App\Funcionario;

use Illuminate\Http\Request;
use Redirect;

class FuncionarioController extends Controller
{
    public function index()
  {
    $funcionarios = Funcionario::get();

    return view('funcionarios.lista', ['funcionarios' => $funcionarios]);
  }

 public function novo()
  {
    return view('funcionarios.formulario');
  }

  public function salvar(Request $request)
  {
    $funcionario = new Funcionario();

   $funcionario = $funcionario->create($request->all());

   \Session::flash('mensagem_sucesso', 'Funcionario cadastrado com Sucesso!');

    return Redirect::to('funcionarios/novo');

  	
  }

public function editar($id)
{
  $funcionario = Funcionario::findOrFail($id);

  return view('funcionarios.formulario', ['funcionario' =>$funcionario]);
}

public function atualizar ($id, Request $request)
{
  $funcionario = Funcionario::findOrFail($id);

  $funcionario->update($request->all());
  \Session::flash('mensagem_sucesso', 'Funcionario atualizado com Sucesso!');

  return Redirect::to('funcionarios/'.$funcionario->id.'/editar');
}



}
