@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Funcionários
                	<a class="pull-right" href="{{url('funcionarios/novo')}}">Novo Funcionário</a>
                </div>

                <div class="panel-body">
                   Listagem de Funcionários
                   <table class="table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Cargo</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($funcionarios as $funcionario)
                            <tr>
                                <td>{{ $funcionario->nome}}</td>
                                <td>{{ $funcionario->endereco}}</td>
                                <td>{{ $funcionario->numero}}</td>
                                <td>{{ $funcionario->cargo}}</td>
                                <td>
                                    <a href="/funcionarios/{{ $funcionario-> id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                    <button class="btn btn-sm">Excluir</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
